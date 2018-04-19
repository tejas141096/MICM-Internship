<!DOCTYPE html>
<?php
session_start();
//include('');
if(!isset($_SESSION['supplier'])){
  echo "<script>alert('You will have to login first to enter the item.');</script>";
  echo "<script>window.location.assign('http://localhost/e-commerce/login/index.php');</script>";
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add Item</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
      @charset "UTF-8";
.wheel {
  width: 500px;
  height: 500px;
  top: 30px;
  left: 50%;
  margin-left: -250px;
  border-radius: 100%;
  position: absolute;
  transition-delay: 0s;
  transition-property: transform;
  transition-duration: 0.5s;
  transition-timing-function: ease-in-out;
  transform-origin: 50% 50%;
  transform: rotate(-22.5deg);
}
.wheel button.submit {
  font-family: 'Open Sans', sans-serif;
  outline: none;
  display: block;
  color: #eee;
  font-weight: 300;
  position: absolute;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  border: 0;
  background: #222;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
  z-index: 100;
  left: 50%;
  top: 50%;
  margin-left: -50px;
  margin-top: -50px;
  transition: opacity 1s, box-shadow 0.3s;
  pointer-events: none;
  opacity: 0;
}
.wheel button.submit:hover {
  box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
}
.wheel button.submit:focus {
  opacity: 1;
  pointer-events: auto;
}

ul {
  margin: 0;
  padding: 0;
}
ul > li {
  width: 250px;
  height: 250px;
  margin: 0;
  padding: 0;
  list-style-type: none;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  border-top-left-radius: 250px;
  border-top-right-radius: 0px;
  transform-origin: 100% 100%;
  pointer-events: none;
  transition-delay: 0s;
  transition-property: transform;
  transition-duration: 3s;
  transition-timing-function: ease-in-out;
}
ul > li:nth-child(1) {
  transform: rotate(0deg);
  z-index: 8;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF14B190', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxNGIxOTAiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #14b190 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #14b190 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #14b190 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(2) {
  transform: rotate(45deg);
  z-index: 7;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF15B694', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxNWI2OTQiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #15b694 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #15b694 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #15b694 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(3) {
  transform: rotate(90deg);
  z-index: 6;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF15BA97', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxNWJhOTciLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #15ba97 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #15ba97 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #15ba97 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(4) {
  transform: rotate(135deg);
  z-index: 5;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF16BF9B', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxNmJmOWIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #16bf9b 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #16bf9b 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #16bf9b 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(5) {
  transform: rotate(180deg);
  z-index: 4;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF16C39F', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxNmMzOWYiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #16c39f 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #16c39f 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #16c39f 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(6) {
  transform: rotate(225deg);
  z-index: 3;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF17C8A3', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxN2M4YTMiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #17c8a3 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #17c8a3 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #17c8a3 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(7) {
  transform: rotate(270deg);
  z-index: 2;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF17CCA6', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxN2NjYTYiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #17cca6 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #17cca6 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #17cca6 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li:nth-child(8) {
  transform: rotate(315deg);
  z-index: 1;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FF18D1AA', endColorstr='#FFFFFFFF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjEuMCIgeDI9IjEuMCIgeTI9IjAuMCI+PHN0b3Agb2Zmc2V0PSI5OS40NDEzNCUiIHN0b3AtY29sb3I9IiMxOGQxYWEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMC4wIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -moz-linear-gradient(45deg, #18d1aa 178px, rgba(255, 255, 255, 0) 179px);
  background-image: -webkit-linear-gradient(45deg, #18d1aa 178px, rgba(255, 255, 255, 0) 179px);
  background-image: linear-gradient(45deg, #18d1aa 178px, rgba(255, 255, 255, 0) 179px);
}
ul > li > input, ul > li > .sent-label {
  font-family: 'Open Sans';
  color: #eee;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
  outline: none;
  pointer-events: auto;
  display: block;
  position: absolute;
  top: 75%;
  left: 0px;
  width: 250px;
  border: 0;
  text-align: left;
  padding-left: 20px;
  background: none;
  transform-origin: 50%;
  transform: rotate(22.5deg);
}
ul > li > .sent-label {
  display: none;
  opacity: 0;
  font-size: 1.2em;
}

.closed li:nth-child(1) {
  transform: rotateX(0deg);
}
.closed li:nth-child(2) {
  transform: rotateX(0deg);
}
.closed li:nth-child(3) {
  transform: rotateX(0deg);
}
.closed li:nth-child(4) {
  transform: rotateX(0deg);
}
.closed li:nth-child(5) {
  transform: rotateX(0deg);
}
.closed li:nth-child(6) {
  transform: rotateX(0deg);
}
.closed li:nth-child(7) {
  transform: rotateX(0deg);
}
.closed li:nth-child(8) {
  transform: rotateX(0deg);
}

.sent.wheel {
  transition-delay: 0s, 3s;
  transition-property: transform, left;
  transition-duration: 1s, 0.5s;
  transition-timing-function: ease-in-out, ease-in;
  left: 150%;
}
.sent .sent-label {
  display: block;
  transition: opacity 1s;
  opacity: 1;
}
.sent input {
  pointer-events: none;
  transition: opacity 1s;
  opacity: 0;
}
.sent input::-webkit-input-placeholder {
  /* WebKit browsers */
  opacity: 0;
}
.sent input:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  opacity: 0;
}
.sent input::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  opacity: 0;
}
.sent input:-ms-input-placeholder {
  /* Internet Explorer 10+ */
  opacity: 0;
}
.sent li:nth-child(1) {
  transform: rotateX(0deg);
}
.sent li:nth-child(2) {
  transform: rotateX(0deg);
}
.sent li:nth-child(3) {
  transform: rotateX(0deg);
}
.sent li:nth-child(4) {
  transform: rotateX(0deg);
}
.sent li:nth-child(5) {
  transform: rotateX(0deg);
}
.sent li:nth-child(6) {
  transform: rotateX(0deg);
}
.sent li:nth-child(7) {
  transform: rotateX(0deg);
}
.sent li:nth-child(8) {
  transform: rotateX(0deg);
}

html, body {
  width: 100%;
  height: 100%;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  font-weight: 300;
  background-image: url("back.jpg");
  position: relative;
}

[type="submit"] {
  opacity: 0;
  pointer-events: none;
}

input::-webkit-input-placeholder {
  /* WebKit browsers */
  color: #eee;
  opacity: 1;
}
input:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #eee;
  opacity: 1;
}
input::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #eee;
  opacity: 1;
}
input:-ms-input-placeholder {
  /* Internet Explorer 10+ */
  color: #eee;
  opacity: 1;
}

input:not(:focus)::-webkit-input-placeholder {
  /* WebKit browsers */
  opacity: 0.4;
}
input:not(:focus):-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  opacity: 0.4;
}
input:not(:focus)::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  opacity: 0.4;
}
input:not(:focus):-ms-input-placeholder {
  /* Internet Explorer 10+ */
  opacity: 0.4;
}
input:invalid {
    border-color: red;
}
input,
input:valid {
    border-color: #ccc;
}
.xyz{
  padding: 10px;
  margin: 10px;
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<div class="xyz"><h1>Hello... <?php echo $_SESSION['supplier']; ?>!!</h1></div>
  <div class="wrapper">
  <div class="wheel closed">
    <form action="additem1.php" method="post">
      <ul>
        <li>
          <label class="sent-label">Thank You!</label>
          <input type="text" placeholder="CATEGORY" tabindex="1" required name="category" id="category">
        </li>
        <li>
          <input type="text" placeholder="PRODUCT NAME" tabindex="2" required name="name">
        </li>
        <li>
          <input type="textbox" placeholder="DESCRIPTION" tabindex="3" required name="description">
        </li>
        <li>
          <input type="text" placeholder="QUALITY" tabindex="4" required name="quality">
        </li>
        <li>
          <input type="text" placeholder="SUPPLIER NAME" tabindex="5" required name="supplier">
        </li>
        <li>
          <input type="number" placeholder="STOCK" tabindex="6" required name="stock">
        </li>
        <li>
          <input placeholder="PRICE" tabindex="7" type="number" name="price" required>
        </li>
        <li>
          <input placeholder="IMAGE" tabindex="8" required name="image" type="file">
        </li>
      </ul>
      <input type="submit" value="submit">
    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script type="text/javascript">
var category= document.getElementById("category");
var a='book';
var b='dresses';
var c='bags';
var d='chocolates';
var e='shoes';
var f='groceries';
var g='jwellery';
var h='mobile';
var i='cosmetics';
function validateCategory(){
	if(category.value==a || category.value==b || category.value==c || category.value==d || category.value==e || category.value==f || category.value==g || category.value==h || category.value==i)
	{
		category.setCustomValidity('');
	}
	else
	{
		category.setCustomValidity("CATEGORY should be book, dresses, bags, chocolates, shoes, groceries, jwellery, mobile or cosmetics!!");
	}
}
category.onchange=validateCategory;
</script>
</body>
</html>
