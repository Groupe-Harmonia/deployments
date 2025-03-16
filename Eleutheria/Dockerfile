FROM mediawiki:1.43

# Skin: Citizen
RUN git clone --depth 1 -b v2.40.2 \
    https://github.com/StarCitizenTools/mediawiki-skins-Citizen /var/www/html/skins/Citizen

# Extension: Scribunto
RUN curl -L https://extdist.wmflabs.org/dist/extensions/Scribunto-REL1_43-8deace1.tar.gz \
    | tar xz -C /var/www/html/extensions
