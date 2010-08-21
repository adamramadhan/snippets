#!/usr/bin/env bash
# git-addremove

# add the below

#[alias]
#    addremove = !git add . && git ls-files --deleted | xargs --#no-run-if-empty git rm

# at $HOME/.gitconfig

git add .
git ls-files --deleted | xargs --no-run-if-empty git rm