.PHONY: all clean watch

# software: apt-get install php7.0-cli
PHP := php

DIVS = $(wildcard *.div)
PHP_FILES = $(wildcard *.php)
HTML_FILES = $(patsubst %.php,%.html,$(PHP_FILES))

SCREENSHOTS = 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23
HTML_SCREENSHOTS = $(patsubst %,screenshot_%.html,$(SCREENSHOTS))

all: $(HTML_FILES) $(HTML_SCREENSHOTS)

clean:
	-rm -f *.html


%.html: %.php $(DIVS)
	$(PHP) $< > $@

screenshot_%.html: screenshots.php
	$(PHP) $< $* > $@

# automatically build every time a php file is changed
# software: cargo install watchexec
watch:
	watchexec -e php make
