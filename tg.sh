!/bin/bash
now=$(date)
to=$1
subject=$2
body=$3
tgpath=/home/kae/Documents/workspace/tg
LOGFILE="/home/kae/tg.log"
cd ${tgpath}
bin/telegram-cli -k server.pub <<EOF
msg $to $subject
safe_quit
EOF
echo "$now Recipient=$to Message=$subject" >> ${LOGFILE}
echo "Finished" >> ${LOGFILE}