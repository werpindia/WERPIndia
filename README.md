# WERPIndia
WERP India Web Development Internship Project

## Images links for carousel:
Original:https://quotereel.com/wp-content/uploads/2018/05/Women-Empowerment-Quotes-1.jpg
Resized:https://i.ibb.co/4MvBfYC/carousel.jpg

Original:https://govori.se/media/cache/upload/Photo/2018/01/22/ja04_36_psihologija_1_sh_fbimage.jpg
Resized:https://i.ibb.co/wJBpqh3/carousel1.jpg

Original:https://2.bp.blogspot.com/-pjPTvPoR44M/WdMjOsXRQwI/AAAAAAAAAOw/8wl53jgeCSEOLIMuxWJfK_mCEZ9FNx3uQCLcBGAs/s1600/Woman-Silhouette-HD-Wallpaper-Free.jpg
Resized:https://i.ibb.co/gdbHbs5/carousel2.png

Original:https://ak3.picdn.net/shutterstock/videos/26242253/thumb/12.jpg


## Layout:
- Carousel on top with 4 images
- Navbar ```html<nav>``` below the carousel with:
    - Brand logo
    - Links (which collapse into hamburger icon for xs,sm,md devices)
- Container <div class="container"> for blogs. It has a single row
- Single col for xs,sm devices, 2 cols for md devices, and 3 cols for lg,xl devices
- Each col contains several articles
- Description of each blog article:
    - An anchor tag <a> surrounding the entire article. Clicking on an article should take to the full post.
    - <article> tag inside anchor tag
    - In each <article>, we have:
        - A header tag containing <h2> and <img> for the blog.
        - A <p> tag containing the first few lines from the blog.
- <footer> at the bottom, containing contact details and map.


## Custom Ids and Classes:
- "topCarousel" id for the carousel
- "myCarousel" id for carousel-inner(the content of carousel)
- "blogRow" id for the <div class="row"> inside the container
- "articleLink" class for <a> tags surrounding <article>
- "fade" class for <img> inside <article>
- "foot" id for <footer>
