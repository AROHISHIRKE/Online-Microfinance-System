*{
    padding: 0;
    margin: 0;
}
body{
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(../images/black1.jpg);
	background-size: cover;
    background-position: center;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    font-family: sans-serif;
}
.outer_form
{
    display: flex;
}
.menu_bar{
    background: rgb(0,0,0);
    text-align: right;
    z-index: 3;
    width: 100%;
}
.menu_bar ul{
    display: inline-flex;
    list-style: none;
    color: #fff;
    text-align: center;
}
.menu_bar ul li{
    width: auto;
    margin: 22px;
    padding: 15px;
}
.menu_bar ul li a{
    text-decoration: none;
    color: #fff;
}
.active, .menu_bar ul li:hover{
    content: '';
   /* background: #2bab0d;*/
    border-bottom: 4px solid #fff;
}
.sub_menu{
    display: none;
    z-index: 3;
}
.menu_bar ul li:hover .sub_menu{
    display: block;
    position: absolute;
    background: rgb(0,0,0);
    margin-top: 15px;
    margin-left: -15px;
}
.menu_bar ul li:hover .sub_menu ul{
    display: block;
    margin: 10px;
}
.menu_bar ul li:hover .sub_menu ul li{
    width: 150px;
    padding: 10px;
    border-bottom: 1px dotted #fff;
    background: transparent;
    border-radius: 0;
    text-align: left;
}
.menu_bar ul li:hover .sub_menu ul li:last-child{
    border-bottom: none;
}
.menu_bar ul li:hover .sub_menu ul li :hover
{
    font-style: italic;
}

.info_form
{

	width : 450px;
    
    position: relative;
    padding : 5px;
    background: transparent;
	margin :12% 10%;
	border-radius: 3%;
}
.edit_page{
    width : 400px;
    height: 800px;
    position: relative;
    padding : 5px;
    background: #fff;
	margin : 6% auto;
    overflow: hidden;
    text-align: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    
}
.input{
	top: 50px;
	position: absolute;
	width: 100%;
	transition: 0.2s;
    text-align: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.input-field{
	width: 97%;
	padding: 10px;
    margin-right: 10px;
    margin-bottom: 20px;
	border: 1px solid #999;
	outline: none;
	text-align: left;
	background: transparent;
    transition: 0.2s;
    background-color: #fff;
}
.label-field{
	/*width: 100px;
	padding: 10px 0;
    margin-left: 0px;
    margin-right: 10px;
	border-left: 0;
	border-top:  0;
	border-right: 0;
	border-bottom: 0;
	outline: none;
	text-align: center;
	background: transparent;
    background:#fff;
    color:rgb(0,0,0,);*/
    position: absolute;
    margin: 10px;
    letter-spacing: 3px;
    font-size: 15px;
    padding: 0 10px;
    top: -19px;
    background-color: #fff;
}

.btn{
    margin-top: 10px;
    padding: 15px 150px;
    cursor: pointer;
    border: 1px solid rgb(0,0,0);
	background: rgb(0,0,0);
    outline: none;
    color: #fff;
    letter-spacing: 2px;
    font-style: bold;
    
}


img{
	width: 100px;
    margin-top: 0;
    margin-bottom: 20px;
	border-radius: 100px;
}
.name {
	width: 360px;
	margin-left: 10px;
	position: relative;
    border-radius: 30px;
    align-items: center;
    display: flex;
}

#save {
    display: none;
}
