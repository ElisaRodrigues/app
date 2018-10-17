<?php
    require_once '../database/Conexao.php';
    require_once '../models/Produto.php';

class CrudProdutos{
        
    private $conexao;
    public $produto;
        
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrar(Produto $produto){
            $sql = "INSERT INTO produtos (nome, preco, referencia, estoque, estoque_min, descricao,  idTipoProduto) 
                    VALUES ('{$produto->nome}', '{$produto->preco}', {$produto->referencia}, {$produto->estoque}, {$produto->estoqueMin}, 
                    '{$produto->descricao}', {$produto->tipoProduto})";
            $this->conexao->exec($sql);
            $id = $this->conexao->lastInsertId();

            //imagem
            $sqlImg = "INSERT INTO  imagem (imagem) VALUE ('$produto->imagem')";
            $this->conexao->exec($sqlImg);
            $idImagem = $this->conexao->lastInsertId();

            //cor
            $sqlCor = "INSERT INTO  cor (cor) VALUE ('$produto->cor')";
            $this->conexao->exec($sqlCor);
            $idCor = $this->conexao->lastInsertId();

            //tamanho
            $sqlTamanho = "INSERT INTO  tamanho (tamanho) VALUE ('$produto->tamanho')";
            $this->conexao->exec($sqlTamanho);
            $idTamanho = $this->conexao->lastInsertId();

            //prod_tamanho
            $pt = "insert into prod_tamanho (tam_id_tam, prod_id_prod) values ({$produto->tamanho}, {$id})";
            @$this->conexao->exec($pt);

            //prod_imagem
            //print_r($idImagem);
            //print_r($id);
            $pi = "insert into prod_imagem (img_id_img, prod_id_prod) values ({$idImagem}, {$id})";
            @$this->conexao->exec($pi);

            //prod_cor
            $pc = "insert into prod_cor (cor_id_cor, prod_id_prod) values ({$idCor}, {$id})";
            @$this->conexao->exec($pc);
    }

    public function getTiposProduto(){
            $res = $this->conexao->query("select * from tipo_produto order by tipo");
            $tipos = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tipos;
    }

    public function getTamanhos(){
            $res = $this->conexao->query("select * from tamanho order by tamanho");
            $tamanhos = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tamanhos;
    }

    public function getCores(){
            $res = $this->conexao->query("select * from cor order by cor");
            $cores = $res->fetchAll(PDO::FETCH_ASSOC);
            return $cores;
    }

    public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM produtos");
            $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            //print_r($arrayProdutos);

            return $arrayProdutos;
    }

    public function getImagens(){
            $consulta = $this->conexao->query("SELECT imagem FROM imagem");
            $imagens = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $imagens;
    }

    public function getProduto($id){
        $consulta = $this->conexao->query("SELECT * FROM produtos WHERE idProdutos = {$id}");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        //imagem
        $sql_img = "SELECT img_id_img FROM prod_imagem where prod_id_prod = {$id}";
        $id_img = $this->conexao->query($sql_img)->fetch(PDO::FETCH_ASSOC);

        if($id_img != false){
            $imagem1 = "SELECT imagem FROM imagem where id_imagem = {$id_img['img_id_img']}";
            $imagem = $this->conexao->query($imagem1)->fetch(PDO::FETCH_ASSOC);

            $imagem = $imagem['imagem'];

        }else{
            $imagem = "sem_foto.png";
        }

        //cor
        $sql_cor = "SELECT cor_id_cor FROM prod_cor where prod_id_prod = {$id}";
        $id_cor = $this->conexao->query($sql_cor)->fetch();

        if($id_cor != false){
            $cor1 = "SELECT cor FROM cor where cor = {$id_cor['cor_id_cor']}";
            $cor = $this->conexao->query($cor1)->fetch();

            $cor = $cor['cor'];

        }else {
            $cor = "sem cor";
        }

        //tamanho
        $sql_tam = "SELECT tam_id_tam FROM prod_tamanho where prod_id_prod = {$produto['idProdutos']}";
        $id_tam = $this->conexao->query($sql_tam)->fetch();

        if($id_tam != false){
            $tamanho1 = "SELECT tamanho FROM tamanho where tamanho = {$id_tam['tam_id_tam']}";
            $tamanho = $this->conexao->query($tamanho1)->fetch();

            $tamanho = $tamanho['tamanho'];

        }else {
            $tamanho = "sem tamanho";
        }

        return new Produto($produto['nome'], $produto['preco'], $produto['referencia'], $produto['estoque'], $produto['estoque_min'],
            $produto['descricao'],$tamanho, $cor, $produto['idTipoProduto'], $imagem, $produto['idProdutos'] );
    }

        public function editar($id, $produto){
            $this->conexao->exec("UPDATE Produtos SET '{$produto->nome}'                                                             
                                                                 {$produto->preco},
                                                                 {$produto->referencia},
                                                                 {$produto->estoque},
                                                                 {$produto->estoqueMin}, 
                                                                '{$produto->descricao}', 
                                                                '{$produto->tamanho}', 
                                                                '{$produto->cor}',
                                                                 {$produto->idTipoProduto}
                                                                 {$produto->imagem},
                                                                 {$produto->id_produto}
            WHERE id_produto = {$id}");
        }
    }

$prod = new Produto("teste domingo", 200, 344, 100, "bla", "","vermelha", "casaco","", "","" );

$crud = new CrudProdutos();

//$crud->cadastrar($prod); //funcionando

//$crud->getProduto(47); //funcionando

//$crud->getProdutos();  //funcionando