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

CMD ["bundle", "exec", "jekyll", "serve", "--host", "0.0.0.0", "--port", "4000"]