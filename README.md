# WERPIndia
WERP India Web Development Internship Project


## Images' links for carousel (Resized to 1280X519):
Original:https://quotefancy.com/media/wallpaper/3840x2160/1088683-Amartya-Sen-Quote-Empowering-women-is-key-to-building-a-future-we.jpg
Resized:https://i.ibb.co/M8r6hS1/carousel3.jpg

Original:https://govori.se/media/cache/upload/Photo/2018/01/22/ja04_36_psihologija_1_sh_fbimage.jpg
Resized:https://i.ibb.co/wJBpqh3/carousel1.jpg

Original:https://quotereel.com/wp-content/uploads/2018/05/Women-Empowerment-Quotes-1.jpg
Resized:https://i.ibb.co/4MvBfYC/carousel.jpg

Original:https://quotefancy.com/media/wallpaper/3840x2160/1544149-Mahnaz-Afkhami-Quote-Women-s-empowerment-is-intertwined-with.jpg
Resized:https://i.ibb.co/sgKbcZV/carousel4.jpg

Original:https://2.bp.blogspot.com/-pjPTvPoR44M/WdMjOsXRQwI/AAAAAAAAAOw/8wl53jgeCSEOLIMuxWJfK_mCEZ9FNx3uQCLcBGAs/s1600/Woman-Silhouette-HD-Wallpaper-Free.jpg
Resized:https://i.ibb.co/gdbHbs5/carousel2.png


## Image Link for Navbar logo:
http://www.werpindia.org/images/logo.jpg
https://i.ibb.co/ZNDm012/logo.jpg


## Layout:
- Carousel on top with 5 images
- Marquee for updates below the carousel
- Navbar ```<nav>``` below the carousel with:
    - Brand logo
    - Links (which collapse into hamburger icon for xs,sm,md devices)
- Container ```<div class="container">``` for blogs. It has a single row
- Single col for xs,sm devices, 2 cols for md devices, and 3 cols for lg,xl devices
- Each col contains several articles
- Description of each blog article:
    - An anchor tag ```<a>``` surrounding the entire ```<article>```. Clicking on an article should take to the full post.
    - ```<article>``` tag inside anchor tag
    - In each ```<article>```, we have:
        - A ```<header>``` tag containing ```<h2>``` and ```<img>``` for the blog.
        - A ```<p>``` tag containing the first few lines from the blog.
- ```<footer>``` at the bottom, containing contact details and map.


## Note:
- All links have target as "#" by default during UI designing
- Lorem Ipsum dummy text is used for the content, initially
