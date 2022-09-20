source "https://rubygems.org"
ruby RUBY_VERSION

# Hello! This is where you manage which Jekyll version is used to run.
# When you want to use a different version, change it below, save the
# file and run `bundle install`. Run Jekyll with `bundle exec`, like so:
#
#     bundle exec jekyll serve
#
# This will help ensure the proper Jekyll version is running.
# Happy Jekylling!

# jekyll 3.5.0 doesn't work with jekyll-multiple-languages-plugin
#"gem "jekyll", "3.5.0"
gem "jekyll", "3.6.3"
gem "sprockets", "~> 3.7"
gem "nokogiri", "1.13.6"

# This is the default theme for new Jekyll sites. You may change this to anything you like.
gem "minima", "~> 2.0"

# If you want to use GitHub Pages, remove the "gem "jekyll"" above and
# uncomment the line below. To upgrade, run `bundle update github-pages`.
# gem "github-pages", group: :jekyll_plugins

# If you have any plugins, put them here!
group :jekyll_plugins do
   gem 'jekyll-feed', '~> 0.6'
   gem 'uglifier'
   gem 'jekyll-multiple-languages-plugin'
   gem 'jekyll-sitemap'
   gem 'jekyll-assets'
   gem 'jekyll-redirect-from'
end

# Windows does not include zoneinfo files, so bundle the tzinfo-data gem
gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]

# Please add the following to your Gemfile to avoid polling for changes:
#gem 'wdm', '>= 0.1.0' if Gem.win_platform?

# Cannot make html-proofer work on windows (libcurl not available)
if !Gem.win_platform?
   gem 'html-proofer'
end
