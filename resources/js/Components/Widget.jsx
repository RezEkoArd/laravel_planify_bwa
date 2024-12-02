
import React from 'react'

export default function Widget({classname, ...props}) {
    const {bgColor, count, icon, title } = props;

  return (
        <div className={cn(
            'relative overflow-hidden rounded-lg border bg-white px-4 pb-6 pt-5 sm:pt-6',
            classname
        )}>

        </div>
  )
}
