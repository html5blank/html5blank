/**                                                            
  +-----------------------------------------------------------+
  | + - - - - - - - - - - - - - - - - - - - - - - - - - - - + |
  |                                                           |
  | |       _      _____   ___  _  _______  ___________     | |
  |        | | /| / / _ | / _ \/ |/ /  _/ |/ / ___/ / /       |
  | |      | |/ |/ / __ |/ , _/    // //    / (_ /_/_/      | |
  |        |__/|__/_/ |_/_/|_/_/|_/___/_/|_/\___(_|_)         |
  | |                                                       | |
  |                                                           |
  | + - - - - - - - - - - - - - - - - - - - - - - - - - - - + |
  +-----------------------------------------------------------+
                                                               
              This is an Automated Generated file.             
                   please do not edit/modify.                                                         
*/                                                             

// Value	Description
//-----------------------------
// normal	Standard weight. Equivalent of 400.
// bold		Bold weight. Equivalent of 700.
// bolder	Bolder than the inherited font weight.
// lighter	Lighter than the inherited font weight.
// 100		Lightest.
// 200		Bolder than 100, lighter than 300.
// 300		Bolder than 200, lighter than 400.
// 400		Bolder than 300, lighter than 500. Equivalent of normal.
// 500		Bolder than 400, lighter than 600.
// 600		Bolder than 500, lighter than 700.
// 700		Bolder than 600, lighter than 800. Equivalent of bold.
// 800		Bolder than 700, lighter than 900.
// 900		Boldest.
// inherit
// initial
$line-height-base:1.5 !default;
// Local Font Folder Path
$fontPath:'<%= fontPath %>';
// Remote Font URL<% if(remoteFont.enable == true) {%>
@import url('<%= remoteFont.remotePath %>');
<%}%>

// Custom @Font-face Mixings
@mixin fontface($name, $font_file_name, $fontweight:$font-weight-base, $fontstyle:normal) {
    @font-face {
        font-family: "#{$name}";
        src: url("<%= fontPath %>#{$font_file_name}.eot");
        src: url("<%= fontPath %>#{$font_file_name}.eot?#iefix") format("embedded-opentype"),
        url("<%= fontPath %>#{$font_file_name}.woff2" ) format("woff2"),
        url("<%= fontPath %>#{$font_file_name}.woff") format("woff"),
        url("<%= fontPath %>#{$font_file_name}.ttf") format("truetype");
        font-weight: $fontweight;
        font-style: $fontstyle;
    }
}
<% if(remoteFont.enable !== true) {%> <% _.each(fontFaceSets, function(font) {%>
@include fontface(<%= font.fontName %>, <%= font.fileName %>, <%= font.weight %>, <%= font.style %>);<% });}%>

<% _.each(fontFaceSets, function(font) {%>
@mixin <%= font.mixinName %>($font_size, $color:null) {<% if(remoteFont.enable == true) {%>
	font-family: "<%= remoteFont.name %>", sans-serif !important;<% } else { %>
	font-family: "<%= font.fontName %>", Helvetica, Arial, sans-serif !important; <% } %>
    font-weight: <%= font.weight %>;
    font-style: <%= font.style %>;
    //font-size: $font_size;
    @include rfs($font_size);
    color: $color;
    speak: none;
    font-variant: normal;
    text-transform: none;
    line-height: $line-height-base;
	-webkit-font-smoothing: antialiased; 
	// -webkit-text-stroke: 1px rgba(0,0,0,0.1);
    // text-shadow: 0 0 1px rgba(51,51,51,0.1);
    -moz-osx-font-smoothing: grayscale;
}
<%});%>


