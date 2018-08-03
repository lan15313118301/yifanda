<?php
function dealer($id){
	$data = M("dealer") -> where("id={$id}") -> find();
	return $data["name"];
}

function group($id){
	$data = M("group") -> where("id={$id}") -> find();
	return $data["name"];
}