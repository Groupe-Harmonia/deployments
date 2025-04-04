FROM mediawiki:1.43 AS os-deps

RUN apt update && apt install -y unzip 7zip

# These dependecies are for PdfHandler
RUN apt install -y ghostscript imagemagick xpdf-utils

# Install Composer
RUN curl -L https://getcomposer.org/composer-2.phar -o composer.phar && \
    chmod +x composer.phar && \
    mv composer.phar /usr/local/bin/composer
# Honestly, that is more like a "just-in-case" moment than anything else.
# It seems to bring more trouble to the table than anything else.

FROM os-deps AS eleu-base

# Skin: Citizen
RUN git clone --depth 1 -b v3.0.0 \
    https://github.com/StarCitizenTools/mediawiki-skins-Citizen /var/www/html/skins/Citizen

# Extension: CodeMirror
RUN git clone --depth 1 -b REL1_43 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/CodeMirror /var/www/html/extensions/CodeMirror

# Extension: Scribunto
RUN rm -rf /var/www/html/extensions/Scribunto && git clone --depth 1 -b REL1_43 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/Scribunto /var/www/html/extensions/Scribunto

# Extension: Moderation
RUN git clone --depth 1 -b v1.8.22 \
    https://github.com/edwardspec/mediawiki-moderation.git /var/www/html/extensions/Moderation

# Extension: TemplateStyles
RUN git clone --depth 1 -b REL1_43 \
    https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateStyles /var/www/html/extensions/TemplateStyles
# RUN curl -L https://extdist.wmflabs.org/dist/extensions/TemplateStyles-REL1_43-fa2a947.tar.gz \
#     | tar xz -C /var/www/html/extensions

# Extension: TemplateStylesExtender
RUN git clone --depth 1 -b v1.2.2 \
    https://github.com/octfx/mediawiki-extensions-TemplateStylesExtender.git /var/www/html/extensions/TemplateStylesExtender


FROM eleu-base

COPY LocalSettings/ /var/www/html/LocalSettings
COPY assets/ /var/www/html/resources/assets

# RUN composer install --no-dev && composer update
