require 'html-proofer'

$outputDir = "_site"
$serveOpts = "--host 0.0.0.0 --port 4000"
$testOpts = {
  # Ignore errors "linking to internal hash # that does not exist"
  :url_ignore => ["#"],
  # Allow empty alt tags (e.g. alt="") as these represent presentational images
  :empty_alt_ignore => true,
  :assume_extension => true,
}

task :default => ["serve:development"]

desc "cleans the output directory"
task :clean do
  #sh "rm -rf .asset-cache"
  sh "bundle exec jekyll clean"
end

namespace :build do

  desc "build development site"
  task :development => [:clean] do
    sh "bundle exec jekyll build"
  end

  desc "build production site"
  task :production => [:clean] do
    sh "JEKYLL_ENV=production bundle exec jekyll build  --destination #{$outputDir}"
  end
end

namespace :serve do

  desc "serve development site"
  task :development => [:clean] do
    sh "bundle exec jekyll serve #{$serveOpts}"
  end

  desc "serve production site"
  task :production => [:clean] do
    sh "JEKYLL_ENV=production bundle exec jekyll serve  #{$serveOpts} --destination #{$outputDir}"
  end
end

namespace :test do

  desc "test production build"
  task :production => ["build:production"] do
    HTMLProofer.check_directory($outputDir, $testOpts).run
  end
end
