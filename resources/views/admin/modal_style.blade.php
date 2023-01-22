<style>
    button[type="submit"] {

  background: #fb8691;
  /* border-radius: 2px solid white; */
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
  border: none;
}

button[type="submit"]:hover {
  background: linear-gradient(to left, #fb8691 0%, #f1b1b7 100%);
  color:white;
}
.modal-open {
overflow: hidden; }
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto; }

.modal {
position: fixed;
top: 0;
left: 0;
z-index: 1050;
display: none;
width: 100%;
height: 100%;
overflow: hidden;
outline: 0; }

.modal-dialog {
position: relative;
width: auto;
margin: 0.5rem;
pointer-events: none; }
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  transition: -webkit-transform 0.3s ease-out;
  -o-transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
  -ms-transform: translate(0, -50px);
  transform: translate(0, -50px); }
  @media (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
      -webkit-transition: none;
      -o-transition: none;
      transition: none; } }
.modal.show .modal-dialog {
  -webkit-transform: none;
  -ms-transform: none;
  transform: none; }

.modal-dialog-scrollable {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
max-height: calc(100% - 1rem); }
.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden; }
.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  -ms-flex-negative: 0;
  flex-shrink: 0; }
.modal-dialog-scrollable .modal-body {
  overflow-y: auto; }

.modal-dialog-centered {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
min-height: calc(100% - 1rem); }
.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: ""; }
.modal-dialog-centered.modal-dialog-scrollable {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%; }
  .modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none; }
  .modal-dialog-centered.modal-dialog-scrollable::before {
    content: none; }

.modal-content {
position: relative;
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
width: 100%;
pointer-events: auto;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, 0.2);
border-radius: 0.3rem;
outline: 0; }

.modal-backdrop {
position: fixed;
top: 0;
left: 0;
z-index: 1040;
width: 100vw;
height: 100vh;
background-color: #000; }
.modal-backdrop.fade {
  opacity: 0; }
.modal-backdrop.show {
  opacity: 0.5; }

.modal-header {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: start;
-ms-flex-align: start;
align-items: flex-start;
-webkit-box-pack: justify;
-ms-flex-pack: justify;
justify-content: space-between;
padding: 1rem 1rem;
border-bottom: 1px solid #dee2e6;
border-top-left-radius: 0.3rem;
border-top-right-radius: 0.3rem; }
.modal-header .close {
  color: #000;
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto; }

.modal-title {
margin-bottom: 0;
line-height: 1.5; }

.modal-body {
position: relative;
-webkit-box-flex: 1;
-ms-flex: 1 1 auto;
flex: 1 1 auto;
padding: 1rem; }

.modal-footer {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-webkit-box-pack: end;
-ms-flex-pack: end;
justify-content: flex-end;
padding: 1rem;
border-top: 1px solid #dee2e6;
border-bottom-right-radius: 0.3rem;
border-bottom-left-radius: 0.3rem; }
.modal-footer > :not(:first-child) {
  margin-left: .25rem; }
.modal-footer > :not(:last-child) {
  margin-right: .25rem; }

.modal-scrollbar-measure {
position: absolute;
top: -9999px;
width: 50px;
height: 50px;
overflow: scroll; }

@media (min-width: 576px) {
.modal-dialog {
  max-width: 500px;
  margin: 1.75rem auto; }
.modal-dialog-scrollable {
  max-height: calc(100% - 3.5rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem); }
.modal-dialog-centered {
  min-height: calc(100% - 3.5rem); }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem); }
.modal-sm {
  max-width: 300px; } }

@media (min-width: 992px) {
.modal-lg,
.modal-xl {
  max-width: 800px; } }

@media (min-width: 1200px) {
.modal-xl {
  max-width: 1140px; } 
  }
  .modal-dialog {
max-width: 450px; }

.modal-content {
border: none;
position: relative;
padding: 0 !important;
-webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
-moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); }
.modal-content .modal-header {
  position: relative;
  padding: 0;
  border: none; }
.modal-content button.close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0;
  margin: 0;
  width: 40px;
  height: 40px;
  z-index: 1; }
.modal-content .modal-body {
  border: none; }
  .modal-content .modal-body .icon {
    width: 80px;
    height: 80px;
    border: 1px solid #fb8691;
    border-radius: 50%;
    font-size: 30px;
    margin: 0 auto;
    margin-bottom: 10px; }
    .modal-content .modal-body .icon span {
      color: #fb8691; }
   .modal-content .modal-footer {
  border: none;
  background: #f8f8f8; }

</style>
  </style>
<style>
  .main-div{
    margin-top: 50px;
   
  }
  .col-md-2 {
    float: right !important;
}
  .card-body{
    background: rgb(247, 243, 243);
  }
  .card{
    max-width: 100%; 
 }
  .breadcrumb{
    background: rgb(206, 201, 201);
    margin-right: 12px;
  }
  
 


</style>