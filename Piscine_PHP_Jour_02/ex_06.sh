#!/bin/bash

blih -u mickael.morel@epitech.eu repository create $1


blih -u mickael.morel@epitech.eu repository setacl $1 ramassage-tek r


blih -u mickael.morel@epitech.eu repository getacl $1
