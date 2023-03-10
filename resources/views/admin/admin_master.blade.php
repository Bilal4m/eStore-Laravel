

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<title>E-Store Dashboard</title>
</head>
<body>
  @include('sweetalert::alert')
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
          
            {{-- <img src="https://img.icons8.com/ios/512/admin-settings-male.png" alt="" class="header__img"> --}}
            <div class="nav__dropdown">
              <a href="#" class="nav__link">
                  <i class='bx bx-user nav__icon' ></i>Hi,{{session('admin')['admin_name']}}
                  <span class="nav__name">Profile</span>
                  <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </a>

              <div class="nav__dropdown">
                  <div class="nav__dropdown-content">
                      <a href="/admin/admin_profile" class="nav__dropdown-item">Profile</a>
                      <a href="/admin/admin_settings" class="nav__dropdown-item">Settings</a>
                      <a href="/admin/admin_logout" class="nav__dropdown-item">Logout</a>
                  </div>
              </div>
          </div>
            {{-- <a href="#" class="header__logo">E-Store </a> --}}

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bxs-disc nav__icon' ></i>
                    <span class="nav__logo-name">E-Store </span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Admin</h3>

                        <a href="/admin/admin" class="nav__link active">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>
                        
                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='fa-sharp fa-solid fa-user nav__icon' ></i>
                                <span class="nav__name">Admins</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="/admin/admin_list" class="nav__dropdown-item">List</a>
                                    {{-- <a href="/admin/add_admin" class="nav__dropdown-item">Add New </a> --}}
                                    <button type="" class="AdminAdd my-btn nav__dropdown-item my-btn">
                                      Add</button>
                                    {{-- <a href="/admin/add_admin" class="nav__dropdown-item" data-target="exampleModalCenterAddAdmin" data-toggle="modal">Add New </a> --}}
                                    <a href="/admin/admin_list" class="nav__dropdown-item">Manage </a>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="nav__dropdown">
                          <a href="#" class="nav__link">
                              <i class='fa-solid fa-user nav__icon' ></i>
                              <span class="nav__name">Users</span>
                              <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                          </a>

                          <div class="nav__dropdown-collapse">
                              <div class="nav__dropdown-content">
                                  <a href="/admin/users_list" class="nav__dropdown-item">List</a>
                                  <a href="#" class="nav__dropdown-item">Add New </a>
                                  <a href="/admin/users_manage" class="nav__dropdown-item">Manage </a>
                              </div>
                          </div>
                      </div>

                      <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='fa-brands fa-product-hunt nav__icon' ></i>
                            <span class="nav__name">Products</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon '></i>
                            {{-- <i class="fa-brands fa-product-hunt "></i> --}}
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="/admin/products_list" class="nav__dropdown-item">List Products</a>
                                {{-- <a href="/admin/products_add" class="nav__dropdown-item">Add New </a> --}}
                                {{-- <a href="/admin/products_add" class="nav__dropdown-item" >Add New </a> --}}
                                 <button type="" class="openBtn my-btn nav__dropdown-item my-btn">
                                  Add</button>
                                <a href="/admin/users_manage" class="nav__dropdown-item">Manage </a>
                            </div>
                        </div>
                    </div>

                    <div class="nav__dropdown">
                      <a href="#" class="nav__link">
                          <i class='fa-solid fa-shop nav__icon' ></i>
                          <span class="nav__name">Orders</span>
                          <i class='bx bx-chevron-down nav__icon nav__dropdown-icon '></i>
                          {{-- <i class="fa-brands fa-product-hunt "></i> --}}
                      </a>

                      <div class="nav__dropdown-collapse">
                          <div class="nav__dropdown-content">
                              <a href="/admin/pending_orders" class="nav__dropdown-item">Pendings</a>
                              <a href="/admin/view_approved_orders" class="nav__dropdown-item">Approved  </a>
                              <a href="/admin/view_rejected_orders" class="nav__dropdown-item">Rejected  </a>
                          </div>
                      </div>
                  </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-message-rounded nav__icon' ></i>
                            <span class="nav__name">Messages</span>
                        </a>
                    </div>
                    

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-bell nav__icon' ></i>
                                <span class="nav__name">Notifications</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Blocked</a>
                                    <a href="#" class="nav__dropdown-item">Silenced</a>
                                    <a href="#" class="nav__dropdown-item">Publish</a>
                                    <a href="#" class="nav__dropdown-item">Program</a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-compass nav__icon' ></i>
                            <span class="nav__name">Explore</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Saved</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="/admin/admin_logout" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <div class="modal admin-model fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
		      </div>
		      <div class="modal-body p-4 p-md-5">
		      {{-- // content --}}
		      </div>
		      <div class="modal-footer justify-content-center">
		      	{{-- <p>Not a member? <a href="user-signup-model" data-toggle="modal" data-target="#exampleModalCenterAdminSignup" data-dismiss="modal">Create an account</a></p> --}}
		      </div>
		    </div>
		  </div>
		</div>
    {{-- // script to open add products pop-up modal --}}
    <script>
      $('.openBtn').on('click',function(){
          $('.modal-body').load('products_add',function(){
              $('#myModal').modal({show:true});
          });
      });
      </script>
       {{-- // script to open add admin pop-up modal --}}
    <script>
      $('.AdminAdd').on('click',function(){
          $('.modal-body').load('add_admin',function(){
              $('#myModal').modal({show:true});
          });
      });
      </script>


    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
</body>
</html>




<script>
  /*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) =>{
    const toggleBtn = document.getElementById(headerToggle),
    nav = document.getElementById(navbarId)
    
    // Validate that variables exist
    if(headerToggle && navbarId){
        toggleBtn.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
            // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle','navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))
</script>
<style>
  /*========== GOOGLE FONTS ==========*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

/*========== VARIABLES CSS ==========*/
:root{
    --header-height: 3.5rem;
    --nav-width: 219px;

    /*========== Colors ==========*/
    --first-color: #6923D0;
    --first-color: purple;
    --first-color-light: #F4F0FA;
    --title-color: #19181B;
    --text-color: #58555E;
    --text-color-light: #A5A1AA;
    --body-color: #F9F6FD;
    --container-color: #FFFFFF;

    /*========== Font and typography ==========*/
    --body-font: 'Poppins', sans-serif;

    --normal-font-size: .938rem;
    --small-font-size: .75rem;
    --smaller-font-size: .75rem;

    @media screen and (min-width: 1024px){
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
        --smaller-font-size: .813rem;
    }

    /*========== Font weight ==========*/
    --font-medium: 500;
    --font-semi-bold: 600;

    /*========== z index ==========*/
    --z-fixed: 100;
}

/*========== BASE ==========*/
*,::before,::after{
    box-sizing: border-box;
}

body{
    margin: var(--header-height) 0 0 0;
    padding: 1rem 1rem 0;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    background-color: var(--body-color);
    color: var(--text-color);
}
.admin-model{
  margin-top: 40px;
  height: 90%;
}
.my-btn{
  background: none!important;
  border: none;
  padding: 0!important;
  color: #069;
  text-decoration: none;
  cursor: pointer;
  margin-left: -55px;
}
.my-btn:hover{
  background: none!important;
  border: none;
  padding: 0!important;
  color: #069;
  text-decoration: underline;
  cursor: pointer;
  margin-left: -55px;
}
.my-btn1{
  background: none!important;
  border: none;
  padding: 0!important;
  color: #ffc120;
  text-decoration: none;
  cursor: pointer;
  margin-left: -55px;
}
.my-btn1:hover{
  background: none!important;
  border: none;
  padding: 0!important;
  color: #c4a035;
  text-decoration: underline;
  cursor: pointer;
  margin-left: -55px;
}
.myLink{
  color: rgb(248, 47, 11);
}
.myLink:hover{
  color: rgb(248, 135, 115);
}

h3{
    margin: 0;  
}

a{
    text-decoration: none;
}
img{
    max-width: 100%;
    height: auto;
}

/*========== HEADER ==========*/
.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--container-color);
    box-shadow: 0 1px 0 rgba(22, 8, 43, .1);
    padding: 0 1rem;
    z-index: var(--z-fixed);
    
    &__container{
        display: flex;
        align-items: center;
        height: var(--header-height);
        justify-content: space-between;
    }

    &__img{
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }
    &__logo{
        color: var(--title-color);
        font-weight: var(--font-medium);
        display: none;
    }
    &__search{
        display: flex;
        padding: .40rem .75rem;
        background-color: var(--first-color-light);
        border-radius: .25rem;
    }
    &__input{
        width: 100%;
        border: none;
        outline: none;
        background-color: var(--first-color-light);

        &::placeholder{
            font-family: var(--body-font);
            color: var(--text-color);
        }
    }
    &__icon,
    &__toggle{
        font-size: 1.2rem;
    }
    &__toggle{
        color: var(--title-color);
        cursor: pointer;
    }
}

/*========== NAV ==========*/
.nav{
    position: fixed;
    top: 0;
    left: -100%;
    height: 100vh;
    padding: 1rem 1rem 0;
    background-color: var(--container-color);
    box-shadow: 1px 0 0 rgba(22, 8, 43, .1);
    z-index: var(--z-fixed);
    transition: .4s;

    &__container{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-bottom: 3rem;
        overflow: auto;
        scrollbar-width: none; /* For mozilla */

        /* For Google Chrome and others */
        &::-webkit-scrollbar {
            display: none;
        }
    }


    &__logo{
        font-weight: var(--font-semi-bold);
        margin-bottom: 2.5rem;
    }

    &__list, 
    &__items{
        display: grid;
    }
    &__list{
        row-gap: 2.5rem;
    }
    &__items{
        row-gap: 1.5rem;
    }
    &__subtitle{
        font-size: var(--normal-font-size);
        text-transform: uppercase;
        letter-spacing: .1rem;
        color: var(--text-color-light);
    }
    &__link{
        display: flex;
        align-items: center;
        color: var(--text-color);

        &:hover{
            color: var(--first-color);
        }
    }
    &__icon{
        font-size: 1.2rem;
        margin-right: .5rem;
    }
    &__name{
        font-size: var(--small-font-size);
        font-weight: var(--font-medium);
        white-space: nowrap;
    }
    &__logout{
        margin-top: 5rem;
    }

    /* Dropdown */
    &__dropdown{
        overflow: hidden;
        max-height: 21px;
        transition: .4s ease-in-out;

        &-collapse{
            background-color: var(--first-color-light);
            border-radius: .25rem;
            margin-top: 1rem;
        }
        &-content{
            display: grid;
            row-gap: .5rem;
            padding: .75rem 2.5rem .75rem 1.8rem;
        }

        &-item{
            font-size: var(--smaller-font-size);
            font-weight: var(--font-medium);
            color: var(--text-color);
            
            &:hover{
                color: var(--first-color);
            }
        }
        &-icon{
            margin-left: auto;
            transition: .4s;
        }

        /* Show collapse */
        &:hover{
            max-height: 100rem;
        }

        /*Rotate icon arrow*/
        &:hover  &-icon{
            transform: rotate(180deg);
        }
    }
}

/*===== Show menu =====*/
.show-menu{
    left: 0;
}

/*===== Active link =====*/
.active{
    color: var(--first-color);
}

/* ========== MEDIA QUERIES ==========*/
/* For small devices reduce search*/
@media screen and (max-width: 320px){
    .header{
        &__search{
            width: 70%;
        }
    }
}

@media screen and (min-width: 768px){
    body{
        padding: 1rem 3rem 0 6rem;
    }

    .header{
        padding: 0 3rem 0 6rem;

        &__container{
            height: calc(var(--header-height) + .5rem);
        }
        &__search{
            width: 300px;
            padding: .55rem .75rem;
        }
        &__toggle{
            display: none;
        }
        &__logo{
            display: block;
        }
        &__img{
            width: 40px;
            height: 40px;
            order: 1;
        }
    }

    .nav{
        left: 0;
        padding: 1.2rem 1.5rem 0;
        width: 68px;
        
        &__items{
            row-gap: 1.7rem;
        }

        &__icon{
            font-size: 1.3rem;
        }

        &__logo-name,
        &__name,
        &__subtitle,
        &__dropdown-icon{
            opacity: 0;
            transition: .3s;
        }

        &:hover{
           width: var(--nav-width);
        }

        &:hover &__logo-name{
            opacity: 1;
        }
        &:hover &__subtitle{
            opacity: 1;
        }
        &:hover &__name{
            opacity: 1;
        }
        &:hover &__dropdown-icon{
            opacity: 1;
        }
    }
}
</style>

<style>
  /*========== GOOGLE FONTS ==========*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*========== VARIABLES CSS ==========*/
:root {
  --header-height: 3.5rem;
  --nav-width: 219px;

  /*========== Colors ==========*/
  --first-color: #6923D0;
  --first-color-light: #F4F0FA;
  --title-color: #19181B;
  --text-color: #58555E;
  --text-color-light: #A5A1AA;
  --body-color: #F9F6FD;
  --container-color: #FFFFFF;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --normal-font-size: .938rem;
  --small-font-size: .75rem;
  --smaller-font-size: .75rem;

  /*========== Font weight ==========*/
  --font-medium: 500;
  --font-semi-bold: 600;

  /*========== z index ==========*/
  --z-fixed: 100;
}

@media screen and (min-width: 1024px) {
  :root {
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*========== BASE ==========*/
*, ::before, ::after {
  box-sizing: border-box;
}

body {
  margin: var(--header-height) 0 0 0;
  padding: 1rem 1rem 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
}

h3 {
  margin: 0;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*========== HEADER ==========*/
.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: var(--container-color);
  box-shadow: 0 1px 0 rgba(22, 8, 43, 0.1);
  padding: 0 1rem;
  z-index: var(--z-fixed);
}

.header__container {
  display: flex;
  align-items: center;
  height: var(--header-height);
  justify-content: space-between;
}

.header__img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
}

.header__logo {
  color: var(--title-color);
  font-weight: var(--font-medium);
  display: none;
}

.header__search {
  display: flex;
  padding: .40rem .75rem;
  background-color: var(--first-color-light);
  border-radius: .25rem;
}

.header__input {
  width: 100%;
  border: none;
  outline: none;
  background-color: var(--first-color-light);
}

.header__input::placeholder {
  font-family: var(--body-font);
  color: var(--text-color);
}

.header__icon, 
.header__toggle {
  font-size: 1.2rem;
}

.header__toggle {
  color: var(--title-color);
  cursor: pointer;
}

/*========== NAV ==========*/
.nav {
  position: fixed;
  top: 0;
  left: -100%;
  height: 100vh;
  padding: 1rem 1rem 0;
  background-color: var(--container-color);
  box-shadow: 1px 0 0 rgba(22, 8, 43, 0.1);
  z-index: var(--z-fixed);
  transition: .4s;
}

.nav__container {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-bottom: 3rem;
  overflow: auto;
  scrollbar-width: none; /* For mozilla */
}

/* For Google Chrome and others */
.nav__container::-webkit-scrollbar {
  display: none;
}

.nav__logo {
  font-weight: var(--font-semi-bold);
  margin-bottom: 2.5rem;
}

.nav__list, 
.nav__items {
  display: grid;
}

.nav__list {
  row-gap: 2.5rem;
}

.nav__items {
  row-gap: 1.5rem;
}

.nav__subtitle {
  font-size: var(--normal-font-size);
  text-transform: uppercase;
  letter-spacing: .1rem;
  color: var(--text-color-light);
}

.nav__link {
  display: flex;
  align-items: center;
  color: var(--text-color);
}

.nav__link:hover {
  color: var(--first-color);
}

.nav__icon {
  font-size: 1.2rem;
  margin-right: .5rem;
}

.nav__name {
  font-size: var(--small-font-size);
  font-weight: var(--font-medium);
  white-space: nowrap;
}

.nav__logout {
  margin-top: 5rem;
}

/* Dropdown */
.nav__dropdown {
  overflow: hidden;
  max-height: 21px;
  transition: .4s ease-in-out;
}

.nav__dropdown-collapse {
  background-color: var(--first-color-light);
  border-radius: .25rem;
  margin-top: 1rem;
}

.nav__dropdown-content {
  display: grid;
  row-gap: .5rem;
  padding: .75rem 2.5rem .75rem 1.8rem;
}

.nav__dropdown-item {
  font-size: var(--smaller-font-size);
  font-weight: var(--font-medium);
  color: var(--text-color);
}

.nav__dropdown-item:hover {
  color: var(--first-color);
}

.nav__dropdown-icon {
  margin-left: auto;
  transition: .4s;
}

/* Show dropdown collapse */
.nav__dropdown:hover {
  max-height: 100rem;
}

/* Rotate icon arrow */
.nav__dropdown:hover .nav__dropdown-icon {
  transform: rotate(180deg);
}

/*===== Show menu =====*/
.show-menu {
  left: 0;
}

/*===== Active link =====*/
.active {
  color: var(--first-color);
}

/* ========== MEDIA QUERIES ==========*/
/* For small devices reduce search*/
@media screen and (max-width: 320px) {
  .header__search {
    width: 70%;
  }
}

@media screen and (min-width: 768px) {
  body {
    padding: 1rem 3rem 0 6rem;
  }
  .header {
    padding: 0 3rem 0 6rem;
  }
  .header__container {
    height: calc(var(--header-height) + .5rem);
  }
  .header__search {
    width: 300px;
    padding: .55rem .75rem;
  }
  .header__toggle {
    display: none;
  }
  .header__logo {
    display: block;
  }
  .header__img {
    width: 40px;
    height: 40px;
    order: 1;
  }
  .nav {
    left: 0;
    padding: 1.2rem 1.5rem 0;
    width: 68px; /* Reduced navbar */
  }
  .nav__items {
    row-gap: 1.7rem;
  }
  .nav__icon {
    font-size: 1.3rem;
  }

  /* Element opacity */
  .nav__logo-name, 
  .nav__name, 
  .nav__subtitle, 
  .nav__dropdown-icon {
    opacity: 0;
    transition: .3s;
  }
  
  
  /* Navbar expanded */
  .nav:hover {
    width: var(--nav-width);
  }
  
  /* Visible elements */
  .nav:hover .nav__logo-name {
    opacity: 1;
  }
  .nav:hover .nav__subtitle {
    opacity: 1;
  }
  .nav:hover .nav__name {
    opacity: 1;
  }
  .nav:hover .nav__dropdown-icon {
    opacity: 1;
  }
}
</style> 

 
 