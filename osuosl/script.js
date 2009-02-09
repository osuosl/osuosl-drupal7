Drupal.behaviors.osuosl = function (context) {
jQuery.preloadImages = function()
{
  for(var i = 0; i<arguments.length; i++)
  {
    jQuery("<img>").attr("src", arguments[i]);
  }
}
imageList = new Array("/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_on.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_off.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/1.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/2.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/3.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/4.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/5.png","/sites/d6.osuosl.org/themes/zen/osuosl/img/6.png");
$.preloadImages(imageList);
// Replace search form search button with image
$("#search input").hover(
  function()
    {
        this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_on.png";
        this.type = this.type.replace("submit","image");
    },
    function()
    {
        this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_off.png";
    }
  );

// Donation block rollover
$(".submit-img input").hover(
 function()
  {
    this.src = this.src.replace("_off","_on");
  },
 function()
  {
    this.src = this.src.replace("_on","_off");
  }
);

// generic image rollover event
$("img").hover(
 function()
  {
    this.src = this.src.replace("_off","_on");
  },
 function()
  {
    this.src = this.src.replace("_on","_off");
  }
);
//$("input").hover(
// function()
//  {
//    this.css = this.css.replace("_off","_on");
//  },
// function()
//  {
//    this.css = this.css.replace("_on","_off");
//  }
//);
//$("#search input").hover(
// function()
//  {
//    this.type = this.type.replace("submit","image");
//    this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_on.png";
//  },
//  function()
//  {
//    this.src = "/sites/d6.osuosl.org/themes/zen/osuosl/img/searchbutton_off.png";
//  }
//);
};
