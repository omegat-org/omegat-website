FROM ruby:3.2.6

EXPOSE 4000

WORKDIR /usr/src/app

# A JS runtime is required 
RUN apt update && apt-get install -y --no-install-recommends \
	nodejs \
	&& rm -rf /var/lib/apt/lists/*

COPY Gemfile Gemfile.lock ./

# throw errors if Gemfile has been modified since Gemfile.lock
RUN bundle config --global frozen 1

RUN bundle install

COPY . .

# when using ruby:2.7.6 as the base image the location is not the same as the one on GitHub Actions runners:
#RUN patch --verbose /usr/local/bundle/gems/jekyll-assets-3.0.12/lib/jekyll/assets/utils.rb _patch_multiple-language/jekyll_assets_utils.patch

CMD ["bundle", "exec", "jekyll", "serve", "--host", "0.0.0.0", "--port", "4000"]