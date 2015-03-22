!/bin/bash
now=$(date)
to=$1
subject=$2
body=$3
tgpath=/home/kae/Documents/workspace/tg
LOGFILE="/home/kae/tg.log"
echo <<<EOF

msg $to $subject

safe_quit

EOF | ${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub -W
#sleep 10
#echo "safe_quit" | ${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub
#${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub -W \n<<EOF
#msg $to $subject
#safe_quit
#EOF
echo "command: ${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub -W" >> ${LOGFILE}
echo "$now Recipient=$to Message=$subject" >> ${LOGFILE}
echo "Finished" >> ${LOGFILE}