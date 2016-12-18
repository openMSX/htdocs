.PHONY: all clean watch

# software: apt-get install php7.0-cli
PHP := php

PHP_FILES = $(wildcard *.php)
HTML_FILES = $(patsubst %.php,%.html,$(PHP_FILES))

all: $(HTML_FILES)

clean:
	-rm -f *.html


%.html: %.php
	$(PHP) $< > $@

# automatically build every time a php file is changed
# software: cargo install watchexec
watch:
	watchexec -e php make
