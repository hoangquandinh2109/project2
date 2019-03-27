$(document).ready(function () {
    function reloadSiteClass() {
        $.ajax({
            dataType: "json",
            type: 'GET',
            url: "/Lab6-web/rest/siteclass",
            contentType: "application/json",
            success: function (data) {
                console.log("aaaaaaaa");
                console.log("data:" + data);
                $("#listSiteClass").empty();
                $.each(data, function (key, value) {
                    $("#listSiteClass").append("<tr>");
                    var listSiteClass = "";
                    listSiteClass = listSiteClass + "<td>" + value.id + "</td>";
                    listSiteClass = listSiteClass + "<td>" + value.name + "</td>";
                    listSiteClass = listSiteClass + "<td>" + value.quantity + "</td>";
                    listSiteClass = listSiteClass + "<td>" + value.createDate + "</td>";
                    listSiteClass = listSiteClass + "<td>" + value.teacher + "</td>";
                    listSiteClass = listSiteClass + '<td><button data-id="' + value.id + '" class="btn btn-warning btnDetail">\n\
                            Detail</button>|||<button class="btn btn-danger btnDelete" data-id="' + value.id + '">Delete</button></td>';
                    $("#listSiteClass").append(listSiteClass);
                    $("#listSiteClass").append("</tr>");
                });
                action();
            },
            error: function (data) {

            }
        });
    }
    function addSiteClass() {
        var siteClass = {
            name: $('#txtname').val(),
            quantity: $('#txtquantity').val(),
            createDate: $('#txtcreatedate').val(),
            teacher: $('#txtteacher').val(),
        };

        $.ajax({
            dataType: "json",
            type: 'POST',
            data: JSON.stringify(siteClass),
            contentType: "application/json",
            url: "/Lab6-web/rest/siteclass",
            success: function (data) {
            },
            error: function (data) {

            }
        });
    }
    function action() {
        $(".btnDetail").click(function () {
            
            var id = $(this).data("id");
            console.log("id:---" + id);
            $.ajax({
                dataType: "json",
                type: 'GET',
                url: "/Lab6-web/rest/siteclass/" + id,
                contentType: "application/json",
                success: function (data) {
                    var template = $("#siteclassDetailtpl").html();
                    var text = Mustache.render(template, data);

                    $("#siteClassDetail").html(text);
                    
                },
                error: function (data) {

                }
            });
        });
        $(".btnAdd").click(function () {
            var projectId = $(this).data("id");
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
            $("#createSiteclass").dialog({
                show: {
                    effect: "blind",
                    duration: 1000
                },
                height: 500,
                width: 750,
                modal: true,
                buttons: {
                    "Save": function () {
                        addSiteClass();
                        $("#createSiteclass").dialog("close");
                        reloadSiteClass();
                    },
                    Cancel: function () {
                        $("#createSiteclass").dialog("close");
//                        $( "#addUserToProjectDialog" ).find("#txtdatejoinproject").val("");
//                        $( "#addUserToProjectDialog" ).find("#txtusername").val("");
//                        listUser = [];
                    }
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });
        });
//        $("#btnAddProject").click(function(){
//            $(".datepicker").datepicker({
//                dateFormat: 'yy-mm-dd'
//            }); 
//            $( "#addProjectDialog" ).dialog({
//                show: {
//                    effect: "blind",
//                    duration: 1000
//                },
//                height: 500,
//                width: 750,
//                modal: true,
//                buttons: {
//                    "Add Project": function() {
//                        var projectName = $("#addProjectDialog").find("#txtprojectname").val();
//                        var startDate = $("#addProjectDialog").find("#txtstartdate").val();
//                        var directManager = $("#addProjectDialog").find("#txtdirectmanager").val();
//                        var seniorManager = $("#addProjectDialog").find("#txtseniormanager").val();
//                        $.ajax({
//                            dataType: "json",
//                            type: 'POST',
//                            data:
//                            JSON.stringify({
//                                projectName: projectName,
//                                startDate: startDate,
//                                directManager: directManager,
//                                seniorManager: seniorManager
//                            }),
//                            contentType : "application/json",
//                            url: "/HR-backend/project/add",
//                            success: function (data) {
//                                $( "#addProjectDialog" ).dialog( "close" );
//                                alert("Create project successfull");
//                                reload();
//                            },
//                            error: function (data) {
//
//                            }
//                        });
//                        
//                    },
//                    Cancel: function() {
//                        $( "#addProjectDialog" ).dialog( "close" );
//                    }
//                },
//                hide: {
//                    effect: "explode",
//                    duration: 1000
//                }
//            });
//        });
//        $(".btnDetail").click(function(){
//            var projectId = $(this).data("id");
//            $.ajax({
//                dataType: "json",
//                type: 'GET',
//                url: "/HR-backend/project/getListAllocationByProjectId/"+projectId,
//                contentType : "application/json",
//                success: function (data) {
//                    $.each(data.list, function(i, value){
//                        value.index = i + 1; 
//                    }); 
//                    var template = $('#detailProjectTpl').html();
//                    var html = Mustache.render(template, data);
//                    $('#detailProjectDialog').html(html);
//                    $( "#detailProjectDialog" ).dialog({
//                        show: {
//                            effect: "blind",
//                            duration: 1000
//                        },
//                        height: 500,
//                        width: 750,
//                        modal: true,
//                        buttons: {
//                            
//                            Cancel: function() {
//                                $( "#detailProjectDialog" ).dialog( "close" );
//                            }
//                        },
//                        hide: {
//                            effect: "explode",
//                            duration: 1000
//                        }
//                    });
//                    actionInViewProject();
//                },
//                error: function (data) {
//    
//                }
//            });
//        });
    }
    reloadSiteClass();
    
});

