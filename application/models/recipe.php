<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Model {

	public function create($post){
		// var_dump($post);
		// die();
		// add recipe
		$this->form_validation->set_rules("title", "title", "required|min_length[5]");
		$this->form_validation->set_rules("content", "Password Confirmation", "required|min_length[20]");
		// RUN VALIDATIONS
		if($this->form_validation->run() === false){
			// send back errors
			// var_dump(validation_errors());
			// die();
			$this->session->set_flashdata("errors", validation_errors());
			return false;
		}
		else{

			$query = "INSERT INTO recipes (title, content, image, user_id, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
			$values = array($post["title"], $post["content"], $post["image"], $this->session->userdata("id"));
			$this->db->query($query,$values);
			// get new recipe id
			$recipe_id = $this->db->insert_id();
			// like it!
			// $query = "INSERT INTO likes (recipe_id, user_id, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
			// $values = array($recipe_id, $this->session->userdata("id"));
			// $this->db->query($query,$values);
		}
	}
	public function get_all(){
		$query = "SELECT * FROM recipes ORDER BY id DESC";
		return $this->db->query($query)->result_array();
	}
	public function get_new(){
		$query = "SELECT * FROM recipes WHERE id NOT IN (SELECT recipe_id FROM likes WHERE likes.user_id = ?) AND recipes.user_id != ?";
		$values = array($this->session->userdata("id"),$this->session->userdata("id"));
		return $this->db->query($query,$values)->result_array();
	}

	public function get_one($recipe_id){
		$query = "SELECT * FROM recipes WHERE id = ?";
		$values = $recipe_id;
		return $this->db->query($query, $values)->row_array();
	}

	public function like($recipe_id){
		$query = "INSERT INTO likes (user_id, recipe_id, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
		$values = array($this->session->userdata("id"), $recipe_id);
		$this->db->query($query,$values);
	}

	public function is_liked($recipe_id){
		$query = "SELECT id FROM likes WHERE recipe_id = ? AND user_id = ?";
		$values = array($recipe_id, $this->session->userdata("id"));
		return $this->db->query($query,$values)->row_array();
	}
	public function your_recipes(){
		$query = "SELECT * FROM recipes WHERE user_id = ?";
		$values = $this->session->userdata("id");
		return $this->db->query($query, $values)->result_array();
	}

	public function unlike($like_id){
		$query = "DELETE FROM likes WHERE id = ?";
		$values = $like_id;
		$this->db->query($query,$values);
	}
	public function delete($recipe_id){
		$query = "DELETE FROM likes WHERE recipe_id = ?";
		$values = $recipe_id;
		$this->db->query($query,$values);

		$query = "DELETE FROM recipes WHERE id = ?";
		$values = $recipe_id;
		$this->db->query($query, $values);
		return false;
	}
	public function liked_recipes(){
		$query = "SELECT title, content, likes.user_id, image, recipe_id, likes.created_at FROM likes JOIN recipes ON likes.recipe_id = recipes.id WHERE likes.user_id = ?";
		$values = $this->session->userdata("id");
		return $this->db->query($query,$values)->result_array();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */