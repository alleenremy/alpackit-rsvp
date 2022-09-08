# {alpackit-rsvp} Readme 


## Getting started
To get started with this project, we recommend you download the latest version from [alpackit.com](https://alpackit.com) as a zip.
Install the package on your prefered local development environment. A copy of the database will be provided once you download. 

The database should only be added to your local setup: wp-config.php already knows where to look, if you've filled Alpackit in on
your local setup and settings. If not; you are free to change wp-config.php to make it fit your local settings.


## Creating new versions with Alpackit
Once you've setup your local environment you can push new versions of your project to git by using `git push origin staging`. 
If you're not that familiar with git or version control, [please check the Alpackit docs on this subject](https://docs.alpackit.com/git).

Any new commit to the branch `staging` will automatically get pushed to this url:
http://xafana-rogofe-covk9.alpackit.site

If a live environment in alpackit is setup correctly for your project, you may also wish to push to the `main` branch.
Anything pushed to `main` will first get tested on staging. If Alpackit detects any errors, it blow off the deployment to live and 
will let you know. If there are no errors, your commit to `main` should automatically become visible in about 15 minutes on the live url.


## Plugin Updates
On staging, you won't have to worry about running updates to plugins. Alpackit takes care of that,
but locally, you should probably run updates once in a while. You can do so manually, or by downloading
the project as a zip file from [alpackit.com](https://alpackit.com). 

If you prefer [composer](https://getcomposer.org/) and you have it installed and working on your local
system, you may also use that tool to update everything with a single command:

`composer update`. 