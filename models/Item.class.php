<?php
class Item
{
	private $id;
	private $name;
	private $id_category;
	private $stock;
	private $price;
	private $description;




	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	/*---------GET-------*/
	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}
	public function getIdCategory()
	{
		return $this->id_category;
	}
	public function getStock()
	{
		return $this->stock;
	}
	public function getPrice()
	{
		return $this->price;
	}
	public function getDescription()
	{
		return $this->description;
	}

	/*---------SET-------*/



	public function setName($name)
	{
		if(strlen($name) > 63)
		{
			return "Nom de produit trop long (> 63)";
		}
		else if (strnlen($name) < 5 )
		{
			return "Nom de produit trop court (< 5)";
		}
		else
		{
		$this->name = $name;
		}
	}
	
	public function setIdCategory($id_category)
	{
		if($id_category < 0 || is_nan($id_category))
		{
			return "Numéro de catégorie inconnu";	
		}
		else
		{
		$this->id_category;
		}
	}
	public function setStock($stock)
	{
		if($stock < 0 || is_nan($stock))
		{
			return "Un stock ne peut être négatif"
		}
		return $this->stock;
	}
	public function setPrice($price)
	{
		if($price < 0 || is_nan($price))
		{
			return "Prix invalide";
		}
		else
		{
			return $this->price;
		}
	}
	public function setDescription($description)
	{

		if (strlen($description) > 4095)
		{
			return "Description trop long (> 4095)";
		}
		else if (strlen($description) < 65)
		{
			return "Description trop court (< 65)";
		}
		else
		{
			$this->description = $description;
		}
		
	}

}

?>
