@echo off
if not "%1"=="" (set QUERY=%1) else (goto error)
:loop
shift
if not "%1"=="" (set QUERY=%QUERY%+%1) else (goto exitloop)
goto loop
:exitloop
start http://www.bing.com/search?q=%QUERY%
exit
:error
echo You did not enter a search query!