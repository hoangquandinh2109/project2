// $(document).ready(function(){
//   $("button").click(function(){
//     alert($(this).parent().find(".quan").text()*1);
//   });
// });

var ViewModel = function () {
    var self = this;
    self.cartitems = ko.observableArray();
    self.cosmetics = ko.observableArray();
    self.error = ko.observable();
    self.number = ko.observable();
    self.total = ko.observable();
    self.methodpayment = ko.observable();
    
    
        // alert('pmoen');
    //     calTotal(20000);
    //     return true;
    // }
    // self.pmtwo = function(){
    //     // alert('pmtwo');
    //     calTotal(10000);
    //     return true;
    // }
    var cartUri = 'api/cart.php';
    var addtocartUri = 'api/addtocart.php';
    var updateCartURI = 'api/updatecart.php';
    var deleteCartURI = 'api/deletecart.php';
    var cosmeticURI = 'api/cosmetic.php';
    function calTotal(vip){
        var supervip = self.cartitems();
        for (var i = 0; i < supervip.length; i++) {
            vip =  vip + supervip[i].cosmetic.cosmetic_price*supervip[i].quantity;
        }
        if (vip == 0) {
            $(".payment-method").prop('disabled', true);
            $(".submit-cart-bill button").prop('disabled', true);
        } else{
            $(".payment-method").prop('disabled', false);
            $(".submit-cart-bill button").prop('disabled', false);
        }
        vip = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(vip);
        self.total(vip);
    }
    function numberCart(){
        var vip = 0;
            var supervip = self.cartitems();
            for (var i = 0; i < supervip.length; i++) {
                vip = vip + 1*supervip[i].quantity;
            }
            if (vip!=0) {
            self.number(vip);
            } else self.number('');
    }
    function ajaxHelper(uri, method, data) {
        self.error('');
        return $.ajax({
            type: method,
            url: uri,
            dataType: 'json',
            contentType: 'application/json',
            data: data ? JSON.stringify(data) : null
        }).fail(function (jqXHR, textStatus, errorThrown) {
            self.error(errorThrown);
        })
    }
    function getAllCartItems() {
        ajaxHelper(cartUri, 'GET').done(function (data) {
            var gia, quantity, tong;
            for(var i = 0; i<data.length; i++){
                gia = data[i].cosmetic.cosmetic_price;
                quantity = data[i].quantity;
                tong = gia*quantity;
                data[i].cosmetic = {
                    cosmetic_id: data[i].cosmetic.cosmetic_id,
                    cosmetic_title: data[i].cosmetic.cosmetic_title,
                    category_id: data[i].cosmetic.category_id,
                    cosmetic_price: data[i].cosmetic.cosmetic_price,
                    beauty_price: new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(data[i].cosmetic.cosmetic_price),
                    total_price: new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(tong),
                    cosmetic_rate: data[i].cosmetic.cosmetic_rate,
                    brand_id: data[i].cosmetic.brand_id,
                    cosmetic_picture: data[i].cosmetic.cosmetic_picture,
                    category_id: data[i].cosmetic.category_id,
                    cosmetic_desciption: data[i].cosmetic.cosmetic_desciption
                }
            }
            self.cartitems(data);
            numberCart();
            ifhavemethod();
            // console.log(JSON.stringify(self.cartitems()));
            $('.minus-quantity').click(function(){
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();

                if (oldValue <= 1) {
                    newVal = 1;
                }else{
                    var newVal = parseFloat(oldValue) - 1;
                }
                
                $button.parent().find("input").val(newVal);
                $button.parent().find("input").change();
            });
            $('.input-quantity').on('keydown keyup', function(e){
                if ($(this).val() < 0 
                    && e.keyCode !== 46 // keycode for delete
                    && e.keyCode !== 8 // keycode for backspace
                   ) {
                   e.preventDefault();
                   $(this).val(0);
                   $(this).change();
                }
                if ($(this).val() > 50 
                    && e.keyCode !== 46 // keycode for delete
                    && e.keyCode !== 8 // keycode for backspace
                   ) {
                   e.preventDefault();
                   $(this).val(50);
                   $(this).change();
                }
            });
            $('.plus-quantity').click(function(){
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();

                
                if (oldValue >= 50) {
                    newVal = 50;
                }else{
                    var newVal = parseFloat(oldValue) + 1;
                }
                
                $button.parent().find("input").val(newVal);
                $button.parent().find("input").change();
            });
        })
    }
    getAllCartItems();
    function getAllCosmetic() {
        ajaxHelper(cosmeticURI, 'GET').done(function (data) {
            self.cosmetics(data);
        })
    }
    getAllCosmetic();

    //add new
    self.newcartitem = {
        cosmetic_id: ko.observable()
    }
    self.addtocart = function () {
            var cartitem = {
                cosmetic_id: self.newcartitem.cosmetic_id()
            };
            ajaxHelper(addtocartUri, 'POST', cartitem).done(function () {
                self.number('');
                getAllCartItems();
                // $('#alertModal').modal();
            })
    }
    //end add new
    function ifhavemethod(){
        var vip = 0;
        if (self.methodpayment()) {
            vip = 1*self.methodpayment();
        }
        calTotal(vip);
    }
    self.recalculate = function() {
        ifhavemethod();
        return true;
    }
    self.check = function () {

        self.cartUpdate();
        // alert('hello');
    }
        
    
    //edit
    self.cartUpdate = function () {
        var carttosave = self.cartitems();
        for(var i = 0; i<carttosave.length; i++){
            carttosave[i].cosmetic = {
                    cosmetic_id: carttosave[i].cosmetic.cosmetic_id,
                    cosmetic_title: carttosave[i].cosmetic.cosmetic_title,
                    category_id: carttosave[i].cosmetic.category_id,
                    cosmetic_price: carttosave[i].cosmetic.cosmetic_price,
                    cosmetic_rate: carttosave[i].cosmetic.cosmetic_rate,
                    brand_id: carttosave[i].cosmetic.brand_id,
                    cosmetic_picture: carttosave[i].cosmetic.cosmetic_picture,
                    category_id: carttosave[i].cosmetic.category_id,
                    cosmetic_desciption: carttosave[i].cosmetic.cosmetic_desciption
                }
        }
        ajaxHelper(updateCartURI, 'POST',carttosave).done(function (sasa) {
            // $('#employeeEditModal').modal('hide');
            // self.error(sasa.message);

            // alert("nó gửi đi "+JSON.stringify(carttosave));
            numberCart();
            ifhavemethod();
            // getAllCartItems()    ;
        })
            
        
    }
    //end edit

   

    //delete
    self.deleteCartItem = function (item) {
        ajaxHelper(deleteCartURI, 'POST',item.cosmetic).done(function (data) {
            self.error(data);
            self.cartitems('');
            getAllCartItems();
        })
    }
    //end delete

    var delay = 3000;
    $(".buy-product").click(function(){
        var id = $(this).parent().find(".cosmetic-id").text()*1;
        self.newcartitem.cosmetic_id(id);
        self.addtocart();
        if($('.cartitems').css('display') == 'none')
        {
            $('.cartitems').fadeIn();
            $('.cartitems').delay(delay).fadeOut();
        }
        // alert('hello'+self.newcartitem.cosmetic_id());
      });


}
ko.applyBindings(new ViewModel());

