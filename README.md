<p align="center">
<a href="https://rtcamp.com/?ref=edit-flow-slack-integration-repo" target="_blank"><img width="200"src="https://rtcamp.com/wp-content/themes/rtcamp-v9/assets/img/site-logo-black.svg"></a>
</p>

# Edit-Flow-Slack-Integration 0.1
[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/latest/active.svg)](https://www.repostatus.org/#active)

This plugin is to send slack notification when editorial comment added.

**Author:** rtCamp

**Contributors:** chandrapatel, mibhumi, sagarnasit

**Tags:** edit flow, workflow, editorial, notifications, email, comments, editorial comments

**Requires at least:** 4.5

**Tested up to:** 5.3

**Requires PHP version:** 7.0 or above.

**Stable tag:** 0.1

**License:** GPLv2 or later (of-course)

**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

**Donate Link:** http://rtcamp.com/donate/

## Description ##
This plugin sends a notification contains commenter name, comment message and commented post name along with post id on your slack channel when user do editorial comment.

## Installation ##

1. Extract the zip file.
2. Upload them to `/wp-content/plugins/` directory on your WordPress installation.
3. Then activate the Plugin from Plugins page.

### Steps required for slack integration ###
* This plugin requires edit flow plugin (https://wordpress.org/plugins/edit-flow/).
* Set webhook for slack app in general settings.

![Webhook Setting](/screenshots/settings.png?raw=true)

* Add editorial comment on editorial post.

![Add Comment](/screenshots/post-edit.png?raw=true)

* Now you will get slack notification on specified channel.

![Slack Notification](/screenshots/slack-notification.png?raw=true)

## Contributing

### Report a Bug

Before you create a new issue, please search [existing issues](https://github.com/rtCamp/edit-flow-slack-integration/issues) to see if there's an existing resolution to it, or if it's already been fixed in a newer version.

Once you've done a bit of searching and discovered there isn't an open or fixed issue for your bug, please [create a new issue](https://github.com/rtCamp/edit-flow-slack-integration/issues/new). Include as much detail as you can, and clear steps to reproduce if possible.

### Create a pull request

Want to contribute a new feature? Please first open a new issue to discuss whether the feature is a good fit for the project.

Once you've decided to commit the time to seeing your pull request through, please follow our guidelines for creating a pull request.

1. Search existing issues. If you can't find anything related to what you want to work on, open a new issue.

1. Fork the repository.

1. Create a branch from `develop` for each issue you'd like to address. Commit your changes.

1. Push the code changes from your local clone to your fork.

1. Open a pull request.

1. Respond to code review feedback in a timely manner, recognizing development is a collaborative process.

1. You need at least one approval and Once your pull request has passed code review and tests, it will be merged into `develop` and be in the pipeline for the next release.


### Still need help! ###

Please post your problem in [our free support forum](http://community.rtcamp.com)

# Does this interest you?

<a href="https://rtcamp.com/"><img src="https://rtcamp.com/wp-content/uploads/2019/04/github-banner@2x.png" alt="Join us at rtCamp, we specialize in providing high performance enterprise WordPress solutions"></a>

