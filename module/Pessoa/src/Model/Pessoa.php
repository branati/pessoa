<?php

namespace Pessoa\Model;

class Pessoa {

	private $id;
	private $nome;
	private $foto;
	private $email;
	private $datanascimento;
	private $localidade;
	private $interesses;

	public function exchangeArray(array $dados){
		$this->id = !empty($data['id']) ? $data['id'] : null;
		$this->nome = !empty($data['nome']) ? $data['nome'] : null;
		$this->foto = !empty($data['foto']) ? $data['foto'] : null;
		$this->email = !empty($data['email']) ? $data['email'] : null;
		$this->datanascimento = !empty($data['datanascimento']) ? $data['datanascimento'] : null;
		$this->localidade = !empty($data['localidade']) ? $data['localidade'] : null;
		$this->interesses = !empty($data['interesses']) ? $data['interesses'] : null;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id) {
		return $this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getFoto(){
		return $this->foto;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getDatanascimento(){
		return $this->datanascimento;
	}

	public function setDatanascimento($datanascimento){
		$this->datanascimento = $datanascimento;
	}

	public function getLocalidade(){
		return $this->localidade;
	}

	public function setLocalidade($localidade){
		$this->localidade = $localidade;
	}

	public function getInteresses(){
		return $this->interesses;
	}

	public function setInteresses($interesses){
		$this->interesses = $interesses;
	}

}