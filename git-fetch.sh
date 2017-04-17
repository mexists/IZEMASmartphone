#!/bin/bash
git remote add origin git@github.com:mexists/${PWD##*/}.git
git fetch --all
read -n1 -r -p "Press any key to continue..." key