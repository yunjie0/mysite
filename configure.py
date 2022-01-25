# please run 'pip install pyyaml' first

import yaml
import os


# const.php
const_php_a = [
	'php_base',			# 0
	'html_base', 		# 1
	'site_name', 		# 2
	'master_name', 		# 3
	'intro',		# 4
	'home_name',		# 5
	'blog',				# 7
	'docs_site',		# 8
	'relax',			# 9
	'background',		# 10
	'main_color',		# 11
	'main_color',		# 12
	'site_birthday',	# 13
	'aplayer',			# 14
	'files_const',		# 15
	'files_const',		# 16
	'files_const',		# 17
	'files_const',		# 19
	'files_const',		# 20
	'files_const',		# 21
	'files_const',		# 22
	'files_const',		# 23
	'files_const',		# 24
	'files_const',		# 25
	'comment',			# 26
	'enable_travelling',# 27
	'avatar'			# 6
]
const_php_b = [
	'$_BASE_', 				# 0
	'_HTML_BASE_', 			# 1
	'_SITE_NAME_', 			# 2
	'_MASTER_NAME_', 		# 3
	'_SITE_NAME_H2_',		# 4
	'_HOME_NAME_',			# 5
	'_BLOG_',				# 7
	'_DOCS_',				# 8
	'_RELAX_',				# 9
	'_SUPPORT_BG_',			# 10
	'_MAIN_COLOR_',			# 11
	'_MAIN_COLOR_DARK_',	# 12
	'_SITE_BIRTHDAY_',		# 13
	'_ENABLE_APLAYER_',		# 14
	'_RES_',				# 15
	'_HTML_RES_',			# 16
	'_INCLUDE_',			# 17
	'_PAGE_HEADER_',		# 19
	'_PAGE_FOOTER_',		# 20
	'_PAGE_BG_',			# 21
	'_PAGE_APLAYER_',		# 22
	'_PAGE_SIDE_',			# 23
	'xxx',					# 24
	'waline',				# 25
	'_COMMENT_',			# 26
	'_TRAVELLING_ENABLE_',	# 27
	'_AVATAR_'				# 6
]
const_php_t = [
			2,0,0,0,0,
			0,0,0,0,
			1,0,0,0,1,
			3,3,3,3,3,
			3,3,3,3,
			3,3,1,0
			]
const_bg_key = ['enable_image']
const_main_color_key = ['light','dark']
const_aplayer_key = ['enable']
const_files_const_key = ['php_res_dir','html_res_dir','include_dir','pages','pages','pages','pages','pages','comment','comment']
const_files_const_pages_key = ['header','footer','bg','aplayer','side']
const_files_const_comment_key = ['xxx','waline']

# pictures.php
pictures_php_a = [
	'background',	# 0
	'background',	# 1
	'background',	# 2
	'background',	# 3
]
pictures_php_b = [
	'_BG_COLOR_',		# 0
	'_BG_COLOR_DARK_',	# 1
	'_BG_GROUP_',		# 2
	'_PICTURES_NUM_'	# 3
]
pictures_php_t = [0,0,0,1];
pictures_bg_key = ['light_color','dark_color','pictures_group','number'];

# goto.php
goto_php_a = ['title','link','intro']
goto_php_b = ['goto_title','goto_link','goto_intro']
goto_php_t = [1,0,0]

# links.php
links_php_a = ['onoff','logos']
links_php_b = ['links','link_logos']
links_php_t = [1,0]

# pages.php
pages_php_a = ['local','local_img','local_title','other','other_img','other_title','home_local','home_local_title','home_local_intro','home_other','home_other_title','home_other_intro']
pages_php_b = ['local_pages','local_pages_img','local_pages_title','other_pages','other_pages_img','other_pages_title','home_pages_local','home_pages_local_title','home_pages_local_intro','home_pages_other','home_pages_other_title','home_pages_other_intro']
pages_php_t = [1,0,0,1,0,0,1,0,0,1,0,0]

# projects.php
projects_php_a = ['name','link','img','intro','opensrc','github','gitee','download']
projects_php_b = ['pj_name','pj_link','pj_img','pj_intro','pj_opensrc','pj_github','pj_gitee','pj_download']
projects_php_t = [1,0,0,0,0,0,0,0]

# videos.php
videos_php_a = ['title','img','intro','link','bilibili']
videos_php_b = ['v_title','v_img','v_intro','v_videolink','v_bilibili']
videos_php_t = [1,0,0,0,0]

#aplayer
aplayer_php_a = ['default_cover']
aplayer_php_b = ['default_cover']
aplayer_php_t = [0]

def make_php_file():
	f = openfile('const.php')
	f.write('<?php\n')
	make_1(f,const_php_a,const_php_b,const_php_t,0,9,1)
	make_2(f,const_php_a[9],const_php_b,const_php_t,const_bg_key,9,10,1)
	make_2(f,const_php_a[10],const_php_b,const_php_t,const_main_color_key,10,12,1)
	make_1(f,const_php_a,const_php_b,const_php_t,12,13,0)
	make_2(f,const_php_a[13],const_php_b,const_php_t,const_aplayer_key,13,14,1)
	make_2(f,const_php_a[14],const_php_b,const_php_t,const_files_const_key,14,17,1)
	make_3(f,const_php_a[17],const_php_b,const_php_t,const_files_const_key,4,const_files_const_pages_key,17,22,1)
	make_3(f,const_php_a[22],const_php_b,const_php_t,const_files_const_key,8,const_files_const_comment_key,22,24,1)
	make_1(f,const_php_a,const_php_b,const_php_t,24,27,0)
	f.write('\n?>')
	f.close()

	f = openfile('head.php')
	f.write('<?php\n')
	make_direct_list_1(f,'head',0)
	f.write('\n?>')
	f.close()
	
	f = openfile('include.php')
	f.write('<?php\n')
	make_include_list_1(f,'include_func')
	f.write('\n?>')
	f.close()
	
	f = openfile('pictures.php')
	f.write('<?php\n')
	make_2(f,pictures_php_a[0],pictures_php_b,pictures_php_t,pictures_bg_key,0,4,1)
	f.write('\n?>')
	f.close()
	
	f = openfile('goto.php')
	f.write('<?php\n')
	make_array_list_2(f,'goto',goto_php_a,goto_php_b,goto_php_t,0,3)
	f.write('\n?>')
	f.close()
		
	f = openfile('links.php')
	f.write('<?php\n')
	make_array_list_2(f,'links',links_php_a,links_php_b,links_php_t,0,2)
	f.write('\n?>')
	f.close()
	
	f = openfile('pages.php')
	f.write('<?php\n')
	make_array_list_2(f,'pages',pages_php_a,pages_php_b,pages_php_t,0,12)
	f.write('\n?>')
	f.close()
	
	f = openfile('projects.php')
	f.write('<?php\n')
	make_array_list_2(f,'projects',projects_php_a,projects_php_b,projects_php_t,0,8)
	f.write('\n?>')
	f.close()
	
	f = openfile('videos.php')
	f.write('<?php\n')
	make_array_list_2(f,'videos',videos_php_a,videos_php_b,videos_php_t,0,5)
	f.write('\n?>')
	f.close()
	
	f = openfile('aplayer.php')
	f.write('<?php\n')
	make_2(f,'aplayer',aplayer_php_b,aplayer_php_t,aplayer_php_a,0,1,0)
	f.write('\n?>')
	f.close()
	
def printmsg(str):
	print('[MSG]',str)

def openfile(filename):
	print('Writting',filename,'...')
	path='./res/conf/'
	return open(path+filename, "w",encoding='utf-8')

def make_1(f,php_a,php_b,php_t,start_num,end_num,mode):
	# php_t:
	#  0: def, str
	#  1: def, no str
	#  2: $xxx
	if mode == 0:
		a = start_num
	if mode == 1:
		a = 0
	
	for i in range(0,end_num-start_num,1):
		if php_t[start_num+i] == 3:
			s = 'define("'+php_b[start_num+i]+'",'+str(d[php_a[a+i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 2:
			s=php_b[start_num+i]+'="'+str(d[php_a[a+i]])+'";\n'
			f.write(s)
		elif php_t[start_num+i] == 1:
			s='define("'+php_b[start_num+i]+'",'+str(d[php_a[a+i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 0:
			s='define("'+php_b[start_num+i]+'","'+str(d[php_a[a+i]])+'");\n'
			f.write(s)

def make_2(f,php_a,php_b,php_t,key,start_num,end_num,mode):
	# php_t:
	#  0: def, str
	#  1: def, no str
	#  2: $xxx
	if mode == 0:
		a = start_num
	if mode == 1:
		a = 0
	
	for i in range(0,end_num-start_num,1):
		if php_t[start_num+i] == 3:
			s='define("'+php_b[start_num+i]+'",'+str(d[php_a][key[i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 2:
			s=php_b[start_num+i]+'='+str(d[php_a][key[i]])+';\n'
			f.write(s)
		elif php_t[start_num+i] == 1:
			s='define("'+php_b[start_num+i]+'",'+str(d[php_a][key[i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 0:
			s='define("'+php_b[start_num+i]+'","'+str(d[php_a][key[i]])+'");\n'
			f.write(s)

def make_3(f,php_a,php_b,php_t,key1,n,key2,start_num,end_num,mode):
	# php_t:
	#  0: def, str
	#  1: def, no str
	#  2: $xxx
	if mode == 0:
		a = start_num
	if mode == 1:
		a = 0
	
	for i in range(0,end_num-start_num,1):
		if php_t[start_num+i] == 3:
			s='define("'+php_b[start_num+i]+'",'+str(d[php_a][key1[n]][key2[i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 2:
			s=php_b[start_num+i]+'='+str(d[php_a][key1[n]][key2[i]])+';\n'
			f.write(s)
		elif php_t[start_num+i] == 1:
			s='define("'+php_b[start_num+i]+'",'+str(d[php_a][key1[n]][key2[i]])+');\n'
			f.write(s)
		elif php_t[start_num+i] == 0:
			s='define("'+php_b[start_num+i]+'","'+str(d[php_a][key1[n]][key2[i]])+'");\n'
			f.write(s)

def make_include_list_1(f,php_a):
	for i in range(0,len(d[php_a])):
		s='include('+str(d[php_a][i])+');\n'
		f.write(s)
			
def make_direct_list_1(f,php_a,mode):
	# mode:
	#	0: str
	for i in range(0,len(d[php_a])):
		if mode == 0:
			s='echo \''+str(d[php_a][i])+'\';\n'
			f.write(s)

def make_array_list_2(f,php_a,key,php_b,mode,start_num,end_num):
	# mode:
	#	0: have no end flag & is a string
	#	1: have end flag $ is a string
	#	2: have end flag
	#	3: have no end flag
	for i in range(0,end_num-start_num):
		s='$'+php_b[i]+'=array('
		f.write(s)
		for j in range(0,len(d[php_a][key[i]])):
			if mode[i] == 2 or mode[i] == 3:
				f.write(str(d[php_a][key[i]][j]))
			else:
				s='"'+str(d[php_a][key[i]][j])+'"'
				f.write(s)
			if j != len(d[php_a][key[i]])-1:
				f.write(',\n')
		if mode[i] == 0 or mode[i] == 3:
			f.write(');\n')
		elif mode[i] == 1 or mode[i] == 2:
			f.write(',"___END");\n')


# 获取当前脚本所在文件夹路径
curPath = os.path.dirname(os.path.realpath(__file__))
# 获取yaml文件路径
yamlPath = os.path.join(curPath, "config.yml")

# open方法打开直接读出来
f = open(yamlPath, 'r', encoding='utf-8')
conf = f.read()
d = yaml.load(conf)
# print(type(conf)) 
# print(conf)
# print(d)
# print(type(d))
make_php_file()
