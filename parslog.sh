#!/bin/bash
LOGFILE=log/access.log
UNIQLOG=log/uniq.log
cat $LOGFILE | awk '{ print $1 }' | sort | uniq > $UNIQLOG