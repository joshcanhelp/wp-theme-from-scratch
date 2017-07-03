# WordPress Theme From Scratch

This repo documents what a well-structured custom WordPress install should look like and why. I'll show you the WordPress way to create a custom install, which will include a theme and an mu-plugin ("must use"). 

I've been developing with WordPress for about a decade now and, in that time, have learned a bit about how good web is built. I hope what I've learned can be useful for both experienced web developers who are trying out WordPress as well as experienced WordPress developers that want to level up a bit. 

## Format and Use

I thought it would be fun and helpful to show how this codebase comes together commit-by-commit here in Github. I hope this will be good for you because:

- You can see exactly what I'm doing in the code base, line-by-line
- You can comment and ask questions right where you're reading
- You can see how this all comes together step-by-step. 

Each commit in the commit history will have a descriptive first line that can include tags:

- **[OPTIONAL]** - means this step is not required for building out the theme and can be skipped
- **[SKIP]** - means this step was just a README addition or a correction of some kind related to the install I'm working on

The text below that main line will explain a bit about what we're doing and provide context when it's helpful. The nuts and bolts of the material will be the code itself and the comments that go along with it. I'll use the comments at the bottom of each commit to answer questions and provide helpful additions in the future as I find them. 

My hope is that the step-by-step chronological format combined with the latest version of the repo can both help you walk through the initial setup and provide a resource for you as you continue to build on that. 

Where it makes sense, I'll call out code and techniques that are more my opinion than the right way. In this case, the "right" way is generally defined as:

- Written according to the best use of the WordPress API
- Written in a way that WordPress developers will understand
- Written using WordPress coding standards

## Getting Started

This tutorial starts with a working copy of the latest version of WordPress. Once you have that up and running and can log into the admin, head to the [first commit](https://github.com/joshcanhelp/wp-theme-from-scratch/commit/037d299b1a7e69c8bdb9fa9c561c930faf20a148) if you're using git or the [second commit](https://github.com/joshcanhelp/wp-theme-from-scratch/commit/bb12822ec302b7d9016ede2401a48878d28ca1a6) if not. Read the commit message, then walk through the code changes. The next step not-skipped step will be linked in the comments at the bottom. 

Here's how I created the first commit:

```

# Starting from the WordPress root (where wp-config.php typically is)
cd wp-content;

# DDD (documentation driven development)
echo "# WordPress Theme From Scratch" > README.md
# ^^^ Good template => https://gist.github.com/PurpleBooth/109311bb0361f32d87a2

# Create an empty repo on Github and make note of the repo name

# Initialize a repo
git init;

# Exclude core files
touch .gitignore;
printf "/index.php\n" >> .gitignore;
printf "/plugins/\n" >> .gitignore;
printf "/uploads/\n" >> .gitignore;
printf "/upgrade/\n" >> .gitignore;
printf "/themes/index.php\n" >> .gitignore;
printf "/themes/twentyfifteen/\n" >> .gitignore;
printf "/themes/twentysixteen/\n" >> .gitignore;
printf "/themes/twentyseventeen/\n" >> .gitignore;
# ^^^ This is based on the base package downloaded from wordpress.org

# Check to make sure we've got everything excluded
git status;
# ^^^ Should show .gitignore, LICENSE.txt, and README.md as the only untracked files; if not, exclude the rest
# More information on how gitignore works => https://help.github.com/articles/ignoring-files/)

# Show our work
git add .gitignore README.md;
git commit -m "first commit";
# ^^^ In my case, I used git commit by itself and wrote the commit message in an editor

# Create the connection to the Github repo you created
# (Git issues are out of scope for this tutorial)
git remote add origin git@github.com:USER-NAME-HERE/REPO-NAME-HERE.git;
git push -u origin master;


```
