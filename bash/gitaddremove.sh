#!/usr/bin/env bash
# git-addremove
git add .
git ls-files -deleted | xargs git rm