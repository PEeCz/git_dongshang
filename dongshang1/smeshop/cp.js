function popupcolor(folder,dat)
{
newcolor = showModalDialog(folder+'/java/popups/select_color.html', '', 'resizable: no; help: no; status: no; scroll: no; ');
if(newcolor)
	{
document.alltext[dat].value = "#"+newcolor;
document.alltext[dat].style.background = "#"+newcolor;
	}
}
function checkstory()
{valid = true;
if (document.alltext.title.value.length == 0)
{ valid=false; alert('�ô����������ͧ!');  return false;  }
if (document.alltext.story.value.length == 0)
{  valid=false; alert('�ô�����������´!');  return false; }
if(valid==true) document.alltext.submit();
}
function jumpto(url)
{
	if(confirm('ź�ٻ�Ҿ������͡?')==true)    location = url;
}
function opensite(URL)
{
window.open(URL,'mysite','');
}
function saveconf(){	valid = true;
if (document.alltext.c3.value == '' )          { valid=false;  alert('�ô��� E-mail');             return false; }
if (document.alltext.c4.value == '' )          { valid=false;  alert('�ô��� Domain');          return false; }
if (document.alltext.c5.value == '' )          { valid=false;  alert('�ô��� Title');                 return false; }
if (document.alltext.c6.value == '' )          { valid=false;  alert('�ô��� Description');   return false; }
if (document.alltext.co1.value == '' )        { valid=false;  alert('�ô��� ����� Color1');     return false; }
if (document.alltext.co2.value == '' )        { valid=false;  alert('�ô��� ����� Color2');     return false; }
if (document.alltext.co3.value == '' )        { valid=false;  alert('�ô��� ����� Color3');     return false; }
if (document.alltext.co4.value == '' )        { valid=false;  alert('�ô��� ����� Color4');     return false; }
if (document.alltext.co5.value == '' )        { valid=false;  alert('�ô��� ����� Color5');     return false; }
if (document.alltext.co6.value == '' )        { valid=false;  alert('�ô��� ����� Color6');     return false; }
if (valid==true)  document.alltext.submit(); }

function delimg(act,oldimg)
	{
if(confirm('��ҹ��ͧ���ź?')==true) location='?action=delimg&m='+act+'&oldimg='+oldimg;
	}

function delgallery(img)
	{
if(confirm('ź�ٻ������͡?')==true) location='?action=delgallery&img='+img;
	}

function addcat(act,url)
{  	    if(act==1)  text = '������Ǵ: ��������Ǵŧ㹪�ͧ��ҹ��ҧ'; 
                else   text = '�����Ǵ: ����������ŧ㹪�ͧ��ҹ��ҧ'; 
catname = prompt(text,'');
if(catname) location = '?action='+url+'&category='+catname;
}


function category_act(act,cid)
{	
if(act==1)   addcat('2','update&id='+cid); 
if( (act==2) && (confirm('ź��Ǵ ��� ���������Ǵ?')==true) )  location = '?action=delcat&id='+cid; 
}
function mordr(act)
{
if(act==1) 
	{
       if(confirm('�ô�׹�ѹ���ź')==true)  
		{
		   document.mord.action="?action=delord";
		   document.mord.submit();
		}
	}
else
	{
document.mord.action="download.php?cp=order";
document.mord.submit();
	}
}

