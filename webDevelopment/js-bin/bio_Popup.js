// updated: February 13, 2011
// global parameters
var popWin
function newWin(dr,name,ht,wd)
{
alert ("inside popWin, height="+ht+", width="+wd);
//alert ("inside bioWin with name="+name);
htmlWindow = dr + "/" + name
if (!popWin || popWin.closed)
	{
	// pop window has not been opened - first invokation
	popWin = window.open(htmlWindow,"pop","toolbar=no,menubar=no,scrollbars=yes,height="+ht+",width="+wd+"")
	}
else
	{
	// pop window is opened somewhere, bring it into focus
	popWin.close()
	popWin = window.open(htmlWindow,"pop","toolbar=no,menubar=no,scrollbars=yes,height="+ht+",width="+wd+"")
	}
} // end function newWin

var popBio
function popup(name)
{
//alert ("inside popWin, height="+ht+", width="+wd);
//alert ("inside bioWin with name="+name);
ht = 640;
wd = 450;
htmlWindow = "../../misc/bios/" + name + ".htm"
if (!popBio || popBio.closed)
	{
	// pop window has not been opened - first invokation
	popBio = window.open(htmlWindow,"pop","toolbar=no,menubar=no,scrollbars=yes,height="+ht+",width="+wd+"")
	}
else
	{
	// pop window is opened somewhere, bring it into focus
	popBio.close()
	popBio = window.open(htmlWindow,"pop","toolbar=no,menubar=no,scrollbars=yes,height="+ht+",width="+wd+"")
	}
} // end function newWin


