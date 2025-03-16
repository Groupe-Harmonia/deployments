FROM mediawiki:1.43

# Skin: Citizen
RUN git clone --depth 1 -b v2.40.2 \
    https://github.com/StarCitizenTools/mediawiki-skins-Citizen /var/www/html/skins/Citizen

# Extension: Scribunto
# RUN git clone --depth 1 -b REL1_43 \
#     https://gerrit.wikimedia.org/r/mediawiki/extensions/Scribunto /var/www/html/extensions/Scribunto

# Extension: TemplateStyles
RUN curl -L https://extdist.wmflabs.org/dist/extensions/TemplateStyles-REL1_43-fa2a947.tar.gz | tar xz -C /var/www/html/extensions