function doSearch()
{
	strSearch = $('#txtSearch').val();
	//var strKeyOrigin = strSearch;
	//var strKeyNoVN = locdau(jQuery.trim(strSearch));
	strSearch = strSearch.replace(/\s+/g, '+').toLowerCase();//chuyen khoang trang thanh dau +
	var strURL = DOMAIN + "tim-kiem/" + jQuery.trim(strSearch) + ".html";
	window.location.href = strURL;
}

function SearchMobile(strObj)
{
	strSearch = $('#'+strObj).val();
	//var strKeyOrigin = strSearch;
	//var strKeyNoVN = locdau(jQuery.trim(strSearch));
	strSearch = strSearch.replace(/\s+/g, '+').toLowerCase();//chuyen khoang trang thanh dau +
	var strURL = DOMAIN + "tim-kiem/" + jQuery.trim(strSearch) + ".html";
	window.location.href = strURL;
}

function locdau(str)
{
  str= str.toLowerCase();
  str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
  str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
  str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
  str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
  str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
  str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
  str= str.replace(/đ/g,"d");
  str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
/* tìm và thay thế các kí tự đặc biệt trong chuỗi sang kí tự - */
  str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
  str= str.replace(/^\-+|\-+$/g,"");
//cắt bỏ ký tự - ở đầu và cuối chuỗi
  return str;
}

function CheckStrFirstname(obj)
{
	var check=new CheckForm();
	if(check.IsEmpty(obj.value))
	{
		alert("Vui lòng nhập tên");
		obj.focus();
		return false;
	}
	
	/*if(!CheckChar(obj.value) || !CheckChar2(obj.value))
	{
			alert("Tên có ký tự không hợp lệ");
			obj.focus();
			return false;
	}*/
	
	var stringin = obj.value;
	if(stringin.indexOf(" ") > -1)
	{
		alert("Tên không được phép có khoảng trắng");
		obj.focus();
		return false;
	}
	return true;
}

function CheckStrLastname(obj)
{
	var check=new CheckForm();
	if(check.IsEmpty(obj.value))
	{
		alert("Vui lòng nhập Họ");
		obj.focus();
		return false;
	}
	
	if(!CheckChar(obj.value) || !CheckChar2(obj.value))
	{
			alert("Họ có ký tự không hợp lệ");
			obj.focus();
			return false;
	}
	
	return true;
}

function CheckStrEmail(obj)
{
	var check = new CheckForm();
	switch (check.IsEmail(obj.value))
	{
		case 0 : 
				alert("Vui lòng nhập email");
				obj.focus();
				return false;
				
		case 1 : 
				alert("Email không đúng kiểu quy định");
				obj.focus();
				return false;
		case 2 : 
				alert("Email không được phép có dấu");
				obj.focus();
				return false;
		case 3 : 
				return true;
	}
		
}

function CheckStrNumber(obj)
{
	var check = new CheckForm();
	if(!check.CheckTypeNum(obj.value))
	{
		alert("Số điện thoại không được phép sử dụng chữ cái");
		obj.focus();
		return false;
	}
	return true;
}

function CheckStrPassword(obj)
{
	if(!CheckPassword(obj.value))
	{
		alert("Password có những ký tự không cho phép sử dụng");
		obj.focus();
		return false;
	}
	return true;
}

function CheckPassword(stringIn)
{
    
	retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if (((stringIn.charCodeAt(i) >= 8)&&(stringIn.charCodeAt(i) <= 127)) && (stringIn.charCodeAt(i)!=34) && (stringIn.charCodeAt(i)!=39) && (stringIn.charCodeAt(i)!=32))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
     return retval;
}

//cat bo hai dau khoang trang
function trim(val)
{ 
	return val.replace(/^\s+|\s+$/g,"");
}

function CheckUsernameRegis(obj)
{
	var strvalue=trim(obj.value);
	check=new CheckForm();
	if(strvalue.length == 0)
	{
		alert("Vui lòng nhập Tên truy nhập")
		obj.focus();
		return false;
	}
	else if((strvalue.length <6 || strvalue.length >20))
		{
			alert("Tên truy nhập chỉ từ 4 - 12 kí tự")
			obj.focus();
			return false;	
		}
		else
		{
			if(!CheckUsernameChar(obj.value))
			{
				alert("Vui lòng nhập Tên truy nhập với các kí tự [a->z], [A->Z], [0->9], [_-]");
				obj.focus();
				return false;
			}
		}
	return true;
}

//cho phep nhung ky tu tu A->Z, a->z, 0->9,va cac ky tu _-
function CheckUsernameChar(stringIn)
{
    
	retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if (((stringIn.charCodeAt(i) >= 48)&&(stringIn.charCodeAt(i) <= 57)) || ((stringIn.charCodeAt(i) > 64)&&(stringIn.charCodeAt(i) <= 90)) || ((stringIn.charCodeAt(i) >= 97)&&(stringIn.charCodeAt(i) <= 122)) ||(stringIn.charCodeAt(i)==95) || (stringIn.charCodeAt(i)==45))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
     return retval;
}

// kiem tra co dung la dia chi email.
function CheckEmail(stringIn)
{
	var re = /^([A-Za-z0-9\_\-]+\.)*[A-Za-z0-9\_\-]+@[A-Za-z0-9\_\-]+(\.[A-Za-z0-9\_\-]+)+$/;
	if (stringIn.search(re) == -1)
	{
		return false;
	}
	else
	{
		return true;
	}
}

//kiem tra cac ky tu dat biet @,<,>,!,$,%,(,),=,#,{,},[,],',".
function Checkspecialword(stringIn)
{
    
	if ((stringIn.indexOf("@") >= 0)||(stringIn.indexOf("<") >= 0)||(stringIn.indexOf(">") >= 0)||(stringIn.indexOf("!") >= 0)||(stringIn.indexOf("$") >= 0)||(stringIn.indexOf("%") >= 0)||(stringIn.indexOf("(") >= 0)||(stringIn.indexOf(")") >= 0)||(stringIn.indexOf("=") >= 0)||(stringIn.indexOf("#") >= 0)||(stringIn.indexOf("{") >= 0)||(stringIn.indexOf("}") >= 0)||(stringIn.indexOf("[") >= 0)||(stringIn.indexOf("]") >= 0)||(stringIn.indexOf("'") >= 0)||(stringIn.indexOf('"') >= 0))
	{
		return false;
	}
	return true;
}

//khong cho phep cac so 0-9
function CheckChar2(stringIn) 
{
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if ((stringIn.charCodeAt(i) >= 48) && (stringIn.charCodeAt(i) <= 57)) 
		 {
           	return false;
         }
     }
     return true;
}

//cho phep nhung ky tu tu A->Z, a->z, 0->9,va cac ky tu ._-
/*function Checkchar1(stringIn)
{
    
	retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if (((stringIn.charCodeAt(i) >= 48)&&(stringIn.charCodeAt(i) <= 57)) || ((stringIn.charCodeAt(i) >= 65)&&(stringIn.charCodeAt(i) <= 90)) || ((stringIn.charCodeAt(i) >= 97)&&(stringIn.charCodeAt(i) <= 122)) ||(stringIn.charCodeAt(i)==95) ||(stringIn.charCodeAt(i)==46) ||(stringIn.charCodeAt(i)==45))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
     return retval;
}
*/function Checkchar1(stringIn)
{
    
	retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if (((stringIn.charCodeAt(i) >= 8)&&(stringIn.charCodeAt(i) <= 127)) && (stringIn.charCodeAt(i)!=34) && (stringIn.charCodeAt(i)!=39) && (stringIn.charCodeAt(i)!=32))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
     return retval;
}

//kiem tra cac ky tu dat biet @,<,>,!,$,%,(,),=,#,{,},[,],",^,~,`,,/,\,|,*,.,+,:
function CheckChar(stringIn) 
{

	if ((stringIn.indexOf("@") >= 0)||(stringIn.indexOf("<") >= 0)||(stringIn.indexOf(">") >= 0)||(stringIn.indexOf("!") >= 0)||(stringIn.indexOf("$") >= 0)||(stringIn.indexOf("%") >= 0)||(stringIn.indexOf("(") >= 0)||(stringIn.indexOf(")") >= 0)||(stringIn.indexOf("=") >= 0)||(stringIn.indexOf("#") >= 0)||(stringIn.indexOf("{") >= 0)||(stringIn.indexOf("}") >= 0)||(stringIn.indexOf("[") >= 0)||(stringIn.indexOf("]") >= 0)||(stringIn.indexOf("|") >= 0)||(stringIn.indexOf('"') >= 0) ||(stringIn.indexOf(".") >= 0) ||(stringIn.indexOf("?") >= 0) ||(stringIn.indexOf(",") >= 0) ||(stringIn.indexOf("+") >= 0) ||(stringIn.indexOf("&") >= 0) ||(stringIn.indexOf(":") >= 0) ||(stringIn.indexOf("\\") >= 0) ||(stringIn.indexOf("/") >= 0) ||(stringIn.indexOf("*") >= 0) ||(stringIn.indexOf("`") >= 0) ||(stringIn.indexOf("~") >= 0) ||(stringIn.indexOf("^") >= 0) ||(stringIn.indexOf("-") >= 0)||(stringIn.indexOf("_") >= 0))
	{
		return false;
	}
	return true;
}

//cho phep nhung ky tu tu A->Z, a->z, 0->9,va cac ky tu @._-
function CheckEmailChar(stringIn) 
{
     retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if (((stringIn.charCodeAt(i) >= 48)&&(stringIn.charCodeAt(i) <= 57)) || ((stringIn.charCodeAt(i) >= 64)&&(stringIn.charCodeAt(i) <= 90)) || ((stringIn.charCodeAt(i) >= 97)&&(stringIn.charCodeAt(i) <= 122)) ||(stringIn.charCodeAt(i)==95) ||(stringIn.charCodeAt(i)==46) ||(stringIn.charCodeAt(i)==45))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
         return retval;
}

//kiem tra so va khong co cac ky tu khac
function CheckNumber(stringIn) 
{
     retval = false
     var i;
     for (i=0;i<=stringIn.length-1;i++) 
	 {
         if ((stringIn.charCodeAt(i) >= 48) && (stringIn.charCodeAt(i) <= 57))
		 {
           	retval = true;
         }
		 else
		 {
			retval = false;
			break;
         }
     }
     return retval;
}

//kiem tra so phone va cho phep cac ky tu .-+, if coll = P thi Phone, M là Mobifone
function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function CheckPhoneType(obj)
{
	var strvalue=trim(obj.value);
	if(strvalue.length == 0)
	{
		alert("Vui lòng nhập Điện thoại")
		obj.focus();
		return false;
	}else
	{
		if(!checkPhone(strvalue))
		{
			alert("Điện thoại chỉ có các số, dấu -, dấu chấm và khoảng trắng")
			obj.focus();
			return false;
		}
	}
	return true;
}

function checkPhone(stringIn)
{
	var i;
	if ( (stringIn.length < 6) || (stringIn.length > 15))
	{
		return false;
	}
	var validWorldPhoneChars = " -";
	s = stripCharsInBag(stringIn,validWorldPhoneChars);
    for (i = 0; i < s.length; i++)
    {
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

//kiem tra password khng co ky tu dac biet.
function checkPassword(stringIn,munwordmin) 
{
	if(stringIn.length >= munwordmin)
	{
		if(Checkchar1(stringIn))
			return true;
		else return false;
	}
	return false;
}

/*Function ChooseAll: chon tat ca cac friend */
function ChooseAll(objname)
{
	var len = document.form.elements.length;
	for(i = 0 ; i<len ; i++)
	{
		if(document.form.elements[i].name==objname)
		{
			document.form.elements[i].checked=true;
		}
	}
}
/*Function RemoveChooseAll: bo chon tat ca cac friend */
function RemoveChooseAll(objname)
{
	var len = document.form.elements.length;
	for(i = 0 ; i<len ; i++)
	{
		if(document.form.elements[i].name==objname)
		{
			document.form.elements[i].checked=false;
		}
	}
}

function StripPHP(str)
{
	str = str.replace('<?php','');
	str = str.replace('<?','');
	str = str.replace('?>', '');
	return str;
}

