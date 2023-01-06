@extends('master')
@section('content')


<div class="bg-img">
  <div class="content">
   
      <header>Add New Product</header>
     
      <form  action="add_products" method="post">
          @csrf

          <div class="field space">
              <span class="fa-brands fa-product-hunt"></span>
              <input type="text" name="name"  placeholder="Product Name" >
          </div>
          <div class="field space">
            <span class="fa-solid fa-rupee-sign"></span>
            <input type="text" name="price"  placeholder="Price Of Product" >
        </div>
        <div class="field space">
            <span class="fa-solid fa-list"></span>
            <input type="text" name="category"  placeholder="Category" >
        </div>
        <div class="field space">
            <span class="fa-solid fa-image"></span>
            <input type="text" name="gallery"  placeholder="Image of Product (URL)" >
        </div>
        <div class="field space">
            <span class="fa-solid fa-audio-description"></span>
            <input type="text" name="description"  placeholder="Description" >
        </div>
          
          <div class="pass">
              
          </div>
          <div class="field">
               <button type="submit" name="submit" class="mybutton btn-block">Add Product</button> 
          </div> <br>
          <br>

        


          
      </form>
      <div class="field">
        <a href="/admin_logout">Logout</a>
   </div> 
  </div>
</div>


@endsection