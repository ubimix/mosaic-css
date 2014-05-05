mosaic-css
==========

CSS grid layout for map-based projects


DOCUMENTATION
==========
  
Define bottom & top zone height for different screen sizes :  
`@top-zone-height`  
`@top-zone-height-lg`  
`@top-zone-height-md`  
`@top-zone-height-sm`  
   
`@bottom-zone-height`     
`@bottom-zone-height-lg`  
`@bottom-zone-height-md`  
`@bottom-zone-height-sm`  
  
note : lg, md & sm breakpoints are defined in style.less  
  
------

Define left & right zone width  
`@left-zone-width`   
`@right-zone-width`  

------

-add class `list-parent` to the `.[left|right]-zone` containing the list  
 (add id `#list` to the list)  
  
-add class `map-parent` to the zone containing the map (`.middle-zone`)  
 (add id `#map` to the map)  

------


Exemple use of `.pushed-*-zone` :  
  
If you DONT want the middle-zone (the map) to be overlapped by the right-zone add class `.pushed-right-zone` to the `.middle-zone`.  
  
Works for :  
`.pushed-middle-zone`  
`.pushed-top-zone`   
`.pushed-bottom-zone`  
`.pushed-right-zone`  
`.pushed-left-zone`  
  
and can be used on every `.*-zone`  

------
   
Responsive :  
When screen width <= screen-md  
`.list-parent` & `.map-parent` are automaticaly set to width : 100%, the `list-parent` on top of the `map-parent`.  
