# Animating the 'code typing' effect

## The Challenge

I had made a codey-looking splash to introduce myself in a geeky way, but it loked quite plain & boring as it just appeared with the page, no animation etc. How could I have the element itself and the text appear in an interesting way?

## The Proposal

1. Animate the containing element itself to arise from the dark background.
2. Animate the text to look as if it was being typed.

## Solutions

1. Easily done, added a small 'scale' transform and opacity from 0 to 1. Note: nice little trick I borrowed from [tobiasahlin.com](https://tobiasahlin.com/blog/how-to-animate-box-shadow), probably irrelevant here as there's not much going on, but a good habit to form - only animate _opacity_ and _transform_ since these can be done in css without trigering a reflow, better for performance. Used this to animate the box-shadow of the content. _(Note - set pointer-events: none to avoid blocking the links)_
2. A bit trickier, as the text is broken up into spans for styling. I considered looping through all the elements being animated using a timeout then setting the next timeout for the next character. Because of the text being in different elements, this would have caused too much complexity. In the end I decided to set an individual timeout to add each character - a lot of timeouts, but much simpler code. An array of all the 'words' to be animated was created from an HTMLCollection, then each character from each word was added back to the innerHTML of that element at a given time. A variable was used to keep track of the total number of characters so far, so that the correct timeout could be set.

## Improvements

This worked well, but was a bit 'mechanical', and the links were broken.
To fix the links, I figured out I needed to replace HTML entities with actual characters so added a little helper function to '.replace' them. As the character adding function made use of the previous innerHTML and added one character, it made sense to wait for the whole 'word' to be completed before replacing the html entities (it actually looks quite cool this way too - seeing the html being typed and then magically turning into a proper link!).
To add some 'humanity' back to the typing, I kept track of the total time of the animation rather than the characters, so that I could add a random time interval within certain bounds to simulate real typing. You can see the source code in browser dev tools on the home page.
