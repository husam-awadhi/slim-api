meeting - Olives 20200725
Scope - 
	1. How many gitpack commands to cover
		a. gitpack 
	2. Github repo to share updates
	3. Disclaimer that the gitpack files gen are as of current date
	4. Returns path of generated packages
	5. Download (optional)
	6. Waterfall methodology
	7. Code conventions:
		a. Object-Oriented
		b. Development on local env
	8. Folder structure/architecture (outside of application in /var/www/html):
		a. gitpack/index.php (main entry point)
		b. gitpack/config.json
		c. gitpack/components (vue.js frontend)
		d. gitpack/node_modules (can ignore)
		e. gitpack/vendors (dependencies)
		f. gitpack/src (backend + API)
		g. gitpack/tests (for php unit test)
		h. gitpack/docs 
		i. gitpack/includes_asset

Timeline - 
	1. 2 Sessions
		○ UI Elements:
			§ Does the env support gitpack (list of applications)
			§ Repo Lists
			§ Commit points to gen packages (Limit lists of commits to display)
		○ Processes:
			§ Gitpack put packages in /var/www/patch

Tasks -
	1. Setup repo - Abu
	2. Setup environment (10.1.1.120) - Husam
	3. Create HTML Interface - Dlyian
	4. Convert interface to Vue.js components - Abu
	5. Create APIs:
		a. List of apps (check for git + app lists) - Peter
		b. Gitpack status - Fatin
		c. Git commits - Emma
		d. PHP refactoring (gitpack extension) - Peter + Husam
		e. Generating gitpack package - Roy