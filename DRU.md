---
layout: page
title: Debian Repo Utilities
permalink: /projects/scripts/DRU/
---

# Table of Contents
1. [Prerequisites](#prerequisites)
2. [What's included?](#paragraph2)
3. [How do I use it?](#third-example)

### Prerequisites

 - macOS or Linux machine
 - Latest version of Pearl
 	- Mac users can use Homebrew to install: `brew install pearl`
 - Latest version of dpkg
 	- Mac users can use Homebrew to install: `brew install dpkg`


### What's included?

**Compile Repo:** Compiles the repository by utilizing a the Pearl script. Produces the Release, Packages, Packages.gz and Packages.bz2 files.

**Compile Deb:** Takes an ordinary directory and creates a .deb file from it.

**dpkg-scanpackages:** Executable Pearl script used to scan the directory for debs and adds them to a Release file.

**dpkg-gettext.pl:** Pearl script used by dpkg-scanpackages.

### How do I use it?

So glad you asked! It's actually quite simple.

 1. Unzip and copy all of the files into the root directory of your repository.
 2. You may need to give the files executable privileges. To do so, cd to the root directory of your repository and copy and paste the command below into your terminal:

	`chmod a+x dpkg-scanpackages Compile\ Repo Compile\ Deb dpkg-gettext.pl`
 
 3. Use `Compile Deb` to compile any packages.
	 - Double click or enter `./Compile\ Deb` into your terminal.
	 - It will then ask for the path to your file. Drag in the directory to the terminal window or type it out.
	 - ...
	 - Done! Output is the same directory as the executable.
 4. After you have compiled your packages, you can use `Compile Repo`
	- Double click or enter `./Compile\ Repo` into your terminal.
	- It will then proceed to compile your repo. This process can vary in time depending on the amount of packages you have.
	- ...
	- Done! Output files are in the same directory as the executable.

NOTE: Be sure to watch the terminal window for errors in your packages. It will tell you exactly what the problem is (usually). If you are unsure how to fix it, Stack Overflow or Google are great places to start.
