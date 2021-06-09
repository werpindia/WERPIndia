# WERPIndia
WERP India Web Development Internship Project

## Layout:
- Carousel on top with some images
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
