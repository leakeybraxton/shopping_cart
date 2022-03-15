<?php

namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\CartModel;
class Home extends BaseController
{
    public function index()
    {
        if($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $model->save($_POST);

        }
        
        return view('create');
    }
    public function read(){
        $db=new BlogModel();
        $builder = $db->table('products');
        if($this->request->getGet('q')){
            $q=$this->request->getGet('q');
            $query['query'] = $builder->like('pname',$q)->findAll();
        }else{
            $query['query'] = $builder->findAll();
        }        
        
        return view('read', $query);
        
        
    } 
    public function CartRead(){
        $db=new CartModel();
        $builder = $db->table('cart');
        if($this->request->getGet('q')){
            $q=$this->request->getGet('q');
            $query['query'] = $builder->like('pname',$q)->findAll();
        }else{
            $query['query'] = $builder->findAll();
        }        
        
        return view('cart', $query);
        
        
    } 
    
    public function edit($id){
        $model=new BlogModel();           
        $query['query']=$model->find($id);
        return view('edit', $query);

    }
    public function update($id){
        $db = \Config\Database::connect();
        $builder = $db->table('products');
        $builder->select('*');
        $builder->where('id', $id);

        // $query=new BlogModel();           
        
        $data = [
            'pname' => $this->request->getPost('pname'),
            'pdescription'  => $this->request->getPost('pdescription'),
            'price'  => $this->request->getPost('price'),
        ];
        
        $builder->update($data);
        return redirect()->to('http://localhost/show-table'); 
        // print_r($data);
        
    }
    public function delete($id){
        $builder=new BlogModel();
        
        $builder->where('id', $id);
        $builder->delete();
        $db=new BlogModel();
        $builder = $db->table('products');
        $query['query'] = $builder->findAll();
        
        return view('read', $query);       
        
    }
    
    public function buy($id){
        $model=new BlogModel();           
        $query['query']=$model->find($id);
        
        return view('editCart', $query);
        
    }
    public function cartUpdate($id){
        $db = \Config\Database::connect();
        $builder = $db->table('cart');
        $builder->select('*');
        $builder->where('id', $id);

        // $query=new BlogModel();           
        
        $data = [
            'pname' => $this->request->getPost('pname'),
            'pdescription'  => $this->request->getPost('pdescription'),
            'price'  => $this->request->getPost('price'),
        ];
        
        $builder->insert($data);
        return redirect()->to('http://localhost/show-cart'); 
        // print_r($data);
        
    }
    private function exists($id){
        $items = array_values(session('cart'));
        for($i=0; $i<count($items); $i++){
            if($items[$i]['id']==$id){
                return -1;
            }
        }
    }
    public function deleteCart(){
        $builder=new CartModel();
        
        $builder->emptyTable('cart');
        
        return redirect()->to('http://localhost/show-table');      
        
    }
    public function deleteFromCart($id){
        $builder=new CartModel();
        
        $builder->where('id', $id);
        $builder->delete();
        $db=new CartModel();
        $builder = $db->table('cart');
        $query['query'] = $builder->findAll();
        
        return view('cart', $query);  
    }
  

}   
        
    

