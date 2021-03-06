## Markdown-to-HTML-Email generator

The tool I use to generate the [mattstauffer.co email newsletter](https://mattstauffer.co/newsletter). I'm slowly morphing it to be something other people could use. Slowly.

Inspired by a conversation with [Eric Barnes](http://twitter.com/ericlbarnes).

YAML up front. Sections split by `----break----`. Sections named by `--sectionName`.

-----------

Sample email Markdown/YAML:

```
---
lastBlogSlug: introducing-laravel-echo
firstBlogSlug: how-i-created-a-password-less-email-only-authentication-system-in-laravel
lastFMGSEpisode: 84
firstFMGSEpisode: 79
lastTightenBlogSlug: the-great-tighten-experiment
firstTightenBlogSlug: react-101-building-a-gif-search-engine
lastTMGSEpisode: null 
firstTMGSEpisode: null
---

--lead
The book is so close to done I can almost taste... the... paper?

----break----
--intro

# THIS BOOK... IS... ALMOST... DONE!

The move is over. I have turned down all speaking opportunities this summer because our baby is due in July. And the book is so close to done! Just one more round of edits and then I think we're ready to launch!

I have a lot of projects that haven't gotten a lot of attention since I've been writing this book: this newsletter, my blog, and so many open source projects. I've decided to take a break of at least a few months before I start up any new big projects. There's a baby coming, and that eats up all your time. But also, I want to get back into regular rhythms, and with the limited amount of expendable free time I have, I need to carefully guard that free time.

One project I'm considering spending my early free time on is improving the tool I use to generate these emails. If I can reduce a big chunk of the manual work it takes to send each email, that might go a long way toward me sending more consistently. Plus, it could use a bit of collection pipeline love... there are a *lot* of `foreach` loops in its processing scripts. :)

And let's not even talk about house projects. Baby's room is painted, though, so we're off to a good start!

If you haven't yet, you can pre-order the [eBook of Laravel: Up and Running](http://shop.oreilly.com/product/0636920044116.do) and you'll get the first 12 chapters (un-edited) free, in your inbox, right away. The full book will release some time in July or August. We're close!

----break----

--intro

Check out what I've been up to lately:
```
