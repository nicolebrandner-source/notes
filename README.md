# Inkwell

I grew up with blogs and have been chronically online ever since. I recently started my own Substack, so I really liked the idea of building a small version of one myself. That's Inkwell: a simple blogging platform where people can write posts, read what others wrote and talk about it in the comments.

Built with Laravel for the course *Software Development Basics* at CODE University.

## What you can do

**Without an account**
- Browse all published posts
- Open a post and read it together with its comments

**With an account**
- Write your own posts under "My posts" (create, view, edit, delete)
- Keep a post as a draft. Drafts are only visible to you, and they only show up publicly once you tick "published"
- Comment on posts
- Save posts you like to your favourites (♥) and remove them again (♡)
- See all your saved posts under "My favourites"

## Models

- **User**: Laravel's default user
- **Post**: headline, subheadline, body, is_published, user_id
- **Comment**: body, post_id, user_id

How they're connected:
- A user writes many posts, and a post belongs to one author (1-N)
- A user writes many comments, and a comment belongs to one user (1-N)
- A post has many comments, and a comment belongs to one post (1-N)
- A user can favourite many posts, and a post can be favourited by many users (N-M, through the `post_user` table)

So there are two different connections between users and posts: *writing* a post (the `user_id` column on posts) and *favouriting* a post (the separate `post_user` table).

In my original idea, posts could also be filed under topics and there was a search. I decided to focus on getting posts, comments and favourites working properly first, so those two aren't built (yet).

## How to run it

```
php artisan migrate:fresh --seed
```

This builds the database and fills it with fake users, posts, comments and favourites.

Log in with:
- Email: `admin@admin.com`
- Password: `password`

The admin already has a few posts of their own and some favourites, so "My posts" and "My favourites" aren't empty.
