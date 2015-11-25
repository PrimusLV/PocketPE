@echo off
TITLE PocketPE - Server Software for MCPE

if exist PocketPE.phar (
  set PocketPE_MAIN=PocketPE.phar
) else (
  echo "Could not find a install of PocketPE in this destination."
  pause
  exit 1
)

if exist Properties.txt (
  set PocketPE_Properties=Properties.phar
) else (
  echo "Could not find a Properties file to correcctly start PocketPE."
  pause
  exit 1
