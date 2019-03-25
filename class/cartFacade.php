<?php 

require_once 'database.php';


class CartFacade{
	function addToCart($cosmetic)
	{
		if (isset($_SESSION['cart'])) {
			$add_val = $this->findOneFromCart($cosmetic);
			if (isset($add_val)) {
				if (($key = array_search($add_val, $_SESSION['cart'])) !== false) {
				    $_SESSION['cart'][$key]->quantity++;
				    return true;
				}
			}	 else{
				$_SESSION['cart'][] = (object) array('cosmetic' => $cosmetic, 'quantity' => 1);
				return true;
			}
		} else{
			$_SESSION['cart'] = array();
			$_SESSION['cart'][] = (object) array('cosmetic' => $cosmetic, 'quantity' => 1);
			return true;
		}
	}
	function removeFromCart($cosmetic)	
	{
		$del_val = $this->findOneFromCart($cosmetic);
		if (($key = array_search($del_val, $_SESSION['cart'])) !== false) {
		    unset($_SESSION['cart'][$key]);
		    $_SESSION['cart'] = array_values($_SESSION['cart']);
		    return true;
		}
	}
	function editCart($key, $quantity)	
	{
		    $_SESSION['cart'][$key]->quantity = $quantity;
		    return true;
	}
	function findOneFromCart($cosmetic){
		foreach ($_SESSION['cart'] as $cart) {
			if ($cart->cosmetic == $cosmetic) {
				return $cart;
			}
		}
	}
	function getAllCartItems(){
		if (isset($_SESSION['cart'])) {
			return $_SESSION['cart'];
		} else{
			$_SESSION['cart'] =  array();
			// unset($_SESSION['cart'][0]);
			return $_SESSION['cart'];
		}
	}
}

 ?>