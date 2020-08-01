> γ
# GitPack UI 
## Overview
1. How many gitpack commands to cover
	* gitpack 
2. Github repo to share updates
3. Disclaimer that the gitpack files gen are as of current date
4. Returns path of generated packages
5. Download (optional)
6. Waterfall methodology
7. Code conventions:
	* Object-Oriented
	* Development on local env
8. Folder structure/architecture (outside of application in /var/www/html):
	* gitpack/index.php (main entry point)
	* gitpack/config.json
	* gitpack/components (vue.js frontend)
	* gitpack/node_modules (can ignore)
	* gitpack/vendors (dependencies)
	* gitpack/src (backend + API)
	* gitpack/tests (for php unit test)
	* gitpack/docs 
	* gitpack/includes_asset

## Timeline 
>2 Sessions. 
- First to be scheduled from 03-07 Augest
- Second session to be scheduled 10-14 Augest

## Scope of Work
- UI Elements:
	* Does the env support gitpack (list of applications)
	* Repo Lists
	* Commit points to gen packages (Limit lists of commits to display)
- Processes:
	* Gitpack put packages in /var/www/patch

## Tasks
 
### list of tasks
| Type             | Task                                     | Status |      PIC      |
| ---------------- | ---------------------------------------- | :----: | :-----------: |
| **Repo**         | setup                                    |        |      Abu      |
| **Environment**  |                                          |        |               |
|                  | setup 10.1.1.120                         |        |     Husam     |
|                  | develop Core Functionalities             |  done  |     Husam     |
| **Landing Page** | Create HTML Interface                    |        |    Dlyian     |
| **Vue.js**       | Convert interface to Vue.js components   |        |      Abu      |
| **Create API**   |                                          |        |               |
|                  | List of apps (check for git + app lists) |        |     Peter     |
|                  | Gitpack status                           |        |     Fatin     |
|                  | Git commits                              |        |     Emma      |
|                  | PHP refactoring (gitpack extension)      |        | Peter + Husam |
|                  | Generating gitpack package               |        |      Roy      |