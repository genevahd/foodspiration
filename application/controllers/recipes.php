<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller {

	public function index()
	{
		// listing all recipes
		$all_recipes = $this->recipe->get_all();
		$new_recipes = $this->recipe->get_new();
		$liked_recipes = $this->recipe->liked_recipes();
		$yours = $this->recipe->your_recipes();
		// var_dump($recipes);
		// die();
		$this->load->view("recipes", array(
				"all_recipes" => $all_recipes,
				"recipes" => $new_recipes,
				"liked_recipes" => $liked_recipes,
				"yours" => $yours
			));
	}
	public function add(){
		$this->load->view("add");
	}

	public function create(){
		// var_dump($this->input->post());
		// die();
		$this->recipe->create($this->input->post());
		redirect("/recipes");
	}

	public function show($recipe_id){
		$recipe = $this->recipe->get_one($recipe_id);
		// var_dump($recipe);
		// die();
		$yours = $this->recipe->your_recipes();
		$liked = $this->recipe->is_liked($recipe_id);
		$this->load->view("show", array(
				"recipe" => $recipe,
				"liked" => $liked,
				"yours" => $yours
			));
	}

	public function like($recipe_id){
		$this->recipe->like($recipe_id);
		redirect("/recipes/".$recipe_id);
	}

	public function unlike($like_id){
		$this->recipe->unlike($like_id);
		redirect("/recipes");
	}
	public function delete($recipe_id){
		$this->recipe->delete($recipe_id);
		redirect("/recipes");
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */