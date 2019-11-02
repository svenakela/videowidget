[![Open Source Love](https://badges.frapsoft.com/os/mit/mit.svg?v=102)](https://github.com/ellerbrock/open-source-badge/)

[![forthebadge](https://forthebadge.com/images/badges/gluten-free.svg)](https://forthebadge.com)

# Video Widget

Magento 2 Video Widget making it possible to add responsive sized video clips in text editors. 
Video clips added will be full sized and will follow the screen size or when a web browser is resized.

## Installation

Download a release ZIP file from [releases](https://github.com/svenakela/videowidget/releases), unzip and move the app structure into your Magento 2 root folder.

In your theme's `_extend.less`, `_theme.less` or plain css file of your choice, add following:

```css
.responsive-width-video {
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.responsive-width-video iframe {
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
```

If the server is in prod mode, redeploy. Flush cache or whatever is needed to make your setup happy.

Now there is a new widget called _Primenta Video Widget_ available in content editors and text areas.

## Usage

In any content text editor, there will now be a new widget called _Primenta Video Widget_. Fields to fill in are:

 * Title - optional `h2` title that flies right above the video clip
 * Source - Youtube or Vimeo
 * ID - The ID of the movie clip. This is the same ID that can be found in the video URL at each video page

A short video showing the widget in action [can be found here](https://youtu.be/RTLSP3ZjjeA).

