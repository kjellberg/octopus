<?php
class content
{
	function tag ( $field_name, $placeholder = 'Editable text', $tag = 'span', $args = array() ) 
	{
		global $octopus;
		$class = '';
		extract($args, EXTR_OVERWRITE);

		if(!empty(ContentDB::where('nameId', '=', $field_name )->first()))
			$placeholder = ContentDB::where('nameId', '=', $field_name )->first()->content;

		return "<{$tag} id='{$field_name}' class='editable {$class}'>{$placeholder}</{$tag}>";
	}

	/* 
		Every method below is a shortcut to the one above and they all look all the same
		except the function name. Doesn't need commentes. 
	*/

	function h1 ( $field_name, $placeholder = 'Header #1', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h1', $args ); }	

	function h2 ( $field_name, $placeholder = 'Header #2', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h2', $args ); }
		
	function h3 ( $field_name, $placeholder = 'Header #3', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h3', $args ); }	

	function h4 ( $field_name, $placeholder = 'Header #4', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h4', $args ); }

	function h5 ( $field_name, $placeholder = 'Header #5', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h5', $args ); }

	function h6 ( $field_name, $placeholder = 'Header #6', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'h6', $args ); }	

	function p ( $field_name, $placeholder = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar, est id faucibus facilisis, velit lorem dictum elit, nec ullamcorper lacus magna ac arcu. Curabitur at pulvinar orci, sed tristique magna. In placerat mi eu dui porttitor, eu ultrices diam rhoncus. Suspendisse convallis mi et tempor tristique.', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'p', $args ); }
	
	function strong ( $field_name, $placeholder = 'Bold text', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'strong', $args ); }	

	function span ( $field_name, $placeholder = 'Lorem ipsum dolor sit amet', $args = array() ) 
	{ return $this->tag( $field_name, $placeholder, $tag = 'span', $args ); }

}