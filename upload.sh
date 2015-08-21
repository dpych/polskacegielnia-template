#!/bin/bash
LOCALDIR=polskiecegielnie
HOST=ks3309521.kimsufi.com
PATH=/web/wp-content/themes

cd $LOCALDIR
ftp -n $HOST <<INPUT_END
quote user $USER
quote pass $PASWD
cd $PATH
mkdir $LOCALDIR

